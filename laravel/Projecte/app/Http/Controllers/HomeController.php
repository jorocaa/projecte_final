<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Arr;


class HomeController extends Controller
{
    public function index()
    {
        $resultB = Blog::get()->where('state','publicat')->sortByDesc('id')->take(10);
        $resultU = array();
        foreach ($resultB as $row){
            $value = User::get()->where('id',$row->idclient)->first();
            $resultU = Arr::add($resultU, $row->id, $value->username);
        }
        return view('home', [
            'result' => $resultB,
            'usuari' => $resultU,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }

    public function termsconditions()
    {
        return view('termcondition');
    }
}
