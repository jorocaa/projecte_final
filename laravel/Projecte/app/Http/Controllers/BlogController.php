<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Image;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('blogs.administrarposts');
    }
    public function getblogs(Request $request){
        if ($request->ajax()) {
            $result =  Blog::all();
            return DataTables::of($result)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '<a href="blogs/'.$row->id.'"><button name="show" value="{{$row->id}}"><i class="fa">&#xf06e;</i></button></a>';
                $btn = $btn.'<a href="blogs/'.$row->id.'/edit"><button name="edit" value="{{$row->id}}"><i class="fa">&#xf044;</i></button></a>';
                $btn = $btn.'<a href="blogs/'.$row->id.'/delete"><button name="del" value="{{$row->id}}"><i class="fa">&#xf1f8;</i></button></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

        }
        return view('blogs.administrarposts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("blogs.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd("optimim pride huawhawuahw");
        $idimg = 1;
        if(isset($request->img)) {
            $upload = $request->img;
            $fileName = $upload->getClientOriginalName();
            $fileSize = $upload->getSize();
            $uploadName = time() . '_' . $fileName;
            $filePath = $upload->storeAs(
                'uploads',
                $uploadName,
                'public'
            );

            if (\Storage::disk('public')->exists($filePath)) {
                //Existe la ruta"
                $fullPath = \Storage::disk('public')->path($filePath);

                Image::create([
                    'filepath' => $filePath,
                    'filesize' => $fileSize
                ]);

                $idimg2 = Image::latest('id')->first();
                $idimg = $idimg2->id;

                //$idimg = DB::table('image')->select('id')->where('filepath', '=', $filePath);
            }
        }
        $idres = 1;
        if(isset($request->linkres)){
            Reservation::create([
                'reservationlink' => $request->linkres,
                'namecompany' => "",
                'idclient' => \Auth::user()->id,
                'idmoderator' => 2,
            ]);
            $idres2 = Reservation::latest('id')->first();
            $idres = $idres2->id;
        }

        Blog::create([

            'idclient' => \Auth::user()->id,
            'idmoderator'=> 2,
            'idcomment'=> 1,
            'title' => $request->titol,
            'category'=> $request->categoria,
            'content'=> $request->contents,
            'wikipedia'=> $request->linkwiki,
            'idimage'=> $idimg,
            'latitude'=> $request->lat,
            'longitude'=> $request->long,
            'idreservation'=> $idres,
            'state'=>'no publicat',
        ]);
        User::where('id',\Auth::user()->id)->increment('postsquantity');
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $resultI =  Image::get()->where('id',$blog->idimage)->first();
        $resultR =  Reservation::get()->where('id',$blog->idreservation);
        return view("blogs.show", [
            'row' => $blog,
            'image' => $resultI,
            'reserve' => $resultR,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $resultI =  Image::get()->where('id',$blog->idimage)->first();
        $resultR =  Reservation::get()->where('id',$blog->idreservation);
        return view("blogs.edit",[
            'blog' => $blog,
            'image' => $resultI,
            'reserva' => $resultR,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        if($request->deleteimage == 'si'){
            if(isset($request->img)){
                $imatge = Image::get()->where('id',$blog->idimage)->first();
                $upload = $request->img;
                $fileName = $upload->getClientOriginalName();
                $fileSize = $upload->getSize();
                $uploadName = time() . '_' . $fileName;

                $filePath = $upload->storeAs(
                    'uploads',
                    $uploadName,
                    'public'
                );

                if (\Storage::disk('public')->exists($filePath)) {
                    $fullPath = \Storage::disk('public')->path($filePath);
                    if($imatge->id != 1) {
                        \Storage::disk('public')->delete($imatge->filepath);
                        //$imatge->delete();
                    }
                    $imagen = Image::create([
                        'filepath' => $filePath,
                        'filesize' => $fileSize
                    ]);
                }
            }
            else{
                $imagen = Image::get()->where('id',1)->first();
            }
        }
        else{
            $idimg = $blog->idimage;
            $imagen = Image::get()->where('id',$idimg)->first();
        }

        $idres = $request->idreservation;

        $idmod = 2;
        $state = 'no publicat';
        if(\Auth::user()->usertype != "U"){
            $idmod = \Auth::user()->id;
            $state = 'publicat';
        }
        if(isset($request->linkres)){
            Reservation::where('id',$idres)->update([
                'reservationlink' => $request->linkres,
                'namecompany' => $request->nomempresa,
                'idmoderator' => $idmod,
            ]);
        }

        Blog::where('id',$blog->id)->update(array(
            'idmoderator'=> $idmod,
            'title' => $request->titol,
            'category'=> $request->categoria,
            'content'=> $request->contingut,
            'wikipedia'=> $request->linkwiki,
            'idimage'=> $imagen->id,
            'latitude'=> $request->lat,
            'longitude'=> $request->long,
            'idreservation'=> $idres,
            'state'=> $state,
        ));

        return redirect('/');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        Blog::where('id',$blog)->delete();
    }
}