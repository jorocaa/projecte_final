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
        //
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
            $idres = $request->idreservation;

            Reservation::create([
                'reservationlink' => $request,
                'namecompany' => "",
                'idclient' => $request->idid,
                'idmoderator' => 2,
            ]);
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
        ]);

        return redirect('homes.index');
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
        //
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
        //
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
