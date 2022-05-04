<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogPropiController extends Controller
{
    public function index()
    {
        $result =  Blog::get()->where('idclient',\Auth::user()->id);
        return view('blogs.administrarposts', [
                'result' => $result,
        ]);
    }
}
