<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class ApropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blogs = Blog::get()->whereBetween('latitude', [$request->l1-0.035 , $request->l1+0.035])->whereBetween('longitude', [$request->l2-0.035 , $request->l2+0.035])->where('state','publicat');

        return view("blogs.near", [
            'result' => $blogs,
        ]);
    }
}
