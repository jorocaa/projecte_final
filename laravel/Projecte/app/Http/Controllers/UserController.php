<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\HomeController;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::select('name','email')->get();
        return \response($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|max:255|unique:users',
            'contrasenya' => 'required',
            'confirmarcontrasenya' => 'required|same:contrasenya',
        ]);

        User::create([
            'usertype' => "U",
            'name' => $request->name,
            'surnames' => $request->surnames,
            'username' => $request->username,
            'password' => Hash::make($request->contrasenya),
            'location' => $request->location,
            'email' => $request->email,
            'salary' => null,
            'dni' => null,
            'iban' => null,
            'nuss' => null,
            'postsquantity' => 0,
        ]);

        return redirect("login"); // buscar como redirigir a login

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function login(Request $request)
    {
        //if (Auth::attempt([
        //    'username' => $request->username,
        //    'password' => $request->password
        //])) {
            //$return = HomeController::index(); // HELPEP
            //return view('home', $return);
        //    return view('home');
        //}else{
        //    return view('login');
        //}

        $request->validate([
            'username' => ['required'],
            'contrasenya' => ['required'],
        ]);

        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->contrasenya,
        ])){
            $u = User::all()->where('username', $request->username);
            $data = [
                'usertype' => $u->usertype,
                '10blogs' => Blog::all()->sortByDesc('id')->take(10)->get(),
            ];
            return view('home')->with($data);
            //    return view('home');
        }else{
            return view('login');
        }
    }
}
