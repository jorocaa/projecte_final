<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class CategoryController extends Controller
{
    public function index()
    {
        $blogs = Blog::select("category")->where('state','publicat')->groupby("category")->get();
        return view("blogs.allcat", [
            'result' => $blogs,
        ]);
    }
    public function indexesp(String $categoria)
    {
        if ($categoria == "NULL"){
            $categoria=NULL;
        }
        $blogs = Blog::all()->where('category',$categoria)->where('state','publicat');
        return view("blogs.espcat", [
            'result' => $blogs,
        ]);
    }
}
