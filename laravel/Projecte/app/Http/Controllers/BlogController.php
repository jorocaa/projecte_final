<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("blogs.show", [
            'blog' => Blog::all()
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
        if(isset($request->img)) {
            $upload = $request->file('img');
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

                $idimg = DB::table('Image')->select('id')->where('filepath', '=', $filePath);

            } else {
                $idimg = 1;
            }
        }

        if(isset($request->idreservation)){
            $idres = $request->idreservation;

            Reservation::create([
                'reservationlink' => $request,
                'namecompany' => "",
                'idclient' => Auth::user()->id,
                'idmoderator' => 2,
            ]);
        }else{
            $idres = 1;
        }

        Blog::create([

            'idclient' => Auth::user()->id,
            'idmoderator'=> null,
            'idcomment'=> null,
            'title' => $request->titol,
            'category'=> $request->categoria,
            'content'=> $request->contents,
            'wikipedia'=> $request->linkwiki,
            'idimage'=> $idimg,
            'latitude'=> $request->lat,
            'longitude'=> $request->long,
            'idreservation'=> $idres,
        ]);

        return redirect("login");
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
