<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
<<<<<<< HEAD
        $request->validate([
            'title' => 'required',
            'content' => 'required|max:255|unique:users',
            ]);

        
        Image::create([

        
        ]);
        Reservation::create([
            'reservationlink',
            'namecompany',
            'idclient',
            'idmoderator',
        ]);
        Blog::create([

            'idclient' => Auth::user()->id,
            'idmoderator'=> null,
            'idcomment'=> null,
            'title' => $request->title,
            'category'=> $request->category,
            'content'=> $request->content,
            'wikipedia'=> $request->linkwiki,
            'idimage'=> $request->,
            'latitude'=> $request->latitude,
            'longitude'=> $request->longitude,
            'idreservation'=> $request->linkres,
        ]);

        return redirect("login");
=======
        return view("blogs.create");
>>>>>>> ae305447892d30976b05b26a7951b4a48e9df302
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
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
