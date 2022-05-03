<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogPropiController extends Controller
{
    public function store( Request $request)
    {
        $result =  Blog::all()->where('idclient',$request->iduser);
        return view('blogs.administrarposts', [
                'result' => $result,
        ]);
    }
}
