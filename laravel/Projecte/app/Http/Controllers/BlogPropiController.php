<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use DataTables;

class BlogPropiController extends Controller
{
    public function index()
    {
        return view('blogspropis.administrarposts');
    }
    public function getblogspropis(Request $request){
        if ($request->ajax()) {
            $result =  Blog::get()->where('idclient',\Auth::user()->id);
            return DataTables::of($result)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '<a href="blogs/'.$row->id.'"><button name="show" value="{{$row->id}}"><i class="fa">&#xf06e;</i></button></a>';
                $btn = $btn.'<a href="blogs/'.$row->id.'/edit"><button name="edit" value="{{$row->id}}"><i class="fa">&#xf044;</i></button></a>';
                $btn = $btn.'<a href="blogsp/'.$row->id.'/delform"><button name="del" value="{{$row->id}}"><i class="fa">&#xf1f8;</i></button></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

        }
        return view('blogspropis.administrarposts');
    }
    public function beforedestroy(Blog $blog)
    {
        return view("blogs.edit",[
            'blog' => $blog,
        ]);
    }
    public function destroy(Request $request, Blog $blog)
    {
        Blog::where('id',$blog->id)->update(array(
            'reasondelete'=> $request->whydel,
        ));
    }
}
