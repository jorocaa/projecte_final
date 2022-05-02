<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Image;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->usertype == "U"){
            $result =  Blog::all()->where('idclient',Auth::user()->id);
            
        }else{
            $result =  Blog::all();
        }
        return view('administrarposts', [
                'result' => $result,
            ]);
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
        if(isset($request->idreservation)){
            Reservation::create([
                'reservationlink' => $request->linkres,
                'namecompany' => "",
                'idclientcreateblog' => $request->idid,
                'idmoderator' => 2,
            ]);
            $idres2 = Reservation::latest('id')->first();
            $idres = $idres2->id;
        }

        Blog::create([

            'idclient' => $request->idid,
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

        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view("blogs.show", [
            'post' => $blog,
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
        $resultB =  Blog::get()->where('id',$blog->id);
        $resultI =  Image::get()->where('id',$blog->idimage);
        $resultR =  Image::get()->where('id',$blog->idreservation);
        return view("blogs.edit",[
            'blog' => $resultB,
            'image' => $resultI,
            'reserva' => $resultR

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
        $idimg = 1;
        if(isset($request->img)) {
            $upload = $request->img;
            $fileName = $upload->getClientOriginalName();
            $fileSize = $upload->getSize();
            $uploadName = time() . '_' . $fileName;
            if($filename != $request->namebefore){
                $filePath = $upload->storeAs(
                    'uploads',
                    $uploadName,
                    'public'
                );

                if (\Storage::disk('public')->exists($filePath)) {
                    $fullPath = \Storage::disk('public')->path($filePath);

                    Image::where('id',$request->imgid)->update([
                        'filepath' => $filePath,
                        'filesize' => $fileSize
                    ]);

                    $idimg2 = Image::orderBy('updated_at','DESC')->first()->id;
                    $idimg = $idimg2->id;
                }
            }
            
        }
        $idres = $request->idreservation;
        
        $idmod = 2;
        $state = 'no publicat';
        if(Auth::user()->usertype != "U"){
            $idmod = Auth::user()->id;
            $state = 'publicat';
        }

        Reservation::where('id',$request->linkres)([
            'reservationlink' => $request->linkres,
            'namecompany' => $request->nomempresa,
            'idmoderator' => $idmod,
        ]);

        Blog::where('id',$blog->id)->update(array(
            'idmoderator'=> $idmod,
            'title' => $request->titol,
            'category'=> $request->categoria,
            'content'=> $request->contents,
            'wikipedia'=> $request->linkwiki,
            'idimage'=> $idimg,
            'latitude'=> $request->lat,
            'longitude'=> $request->long,
            'idreservation'=> $idres,
            'state'=> $state,
        ));

        return redirect('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}

//@php
  //$edit= $_GET['edit'];
    //$where= $_REQUEST['where'];
    //$showout = "SELECT * FROM blog WHERE `id`='$edit'";
    //$result = $conexion->query($showout);
    //$row=mysqli_fetch_assoc($result);

    //$reser = $row["idreservation"];
    //$showoutres = "SELECT * FROM reservation WHERE `id`='$reser'";
    //$resultres = $conexion->query($showoutres);
    //$rowres=mysqli_fetch_assoc($resultres);
//@endphp
