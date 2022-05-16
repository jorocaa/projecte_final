<?php

namespace App\Http\Controllers;

use App\Models\Incidencia;
use Illuminate\Http\Request;
use DataTables;
use App\Models\User;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('incidencies.administarincidencies');
    }
    public function getincidencies(Request $request){
        if ($request->ajax()) {
            $result =  Incidencia::all();
            return DataTables::of($result)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '<a href="incidencies/'.$row->id.'"><button name="show" value="{{$row->id}}"><i class="fa">&#xf06e;</i></button></a>';
                $btn = $btn.'<a href="incidencies/'.$row->id.'/delete"><button name="del" value="{{$row->id}}"><i class="fa">&#xf1f8;</i></button></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

        }
        return view('incidencies.administarincidencies');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("incidencies.incidencies");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Incidencia::create([

            'idclient' => \Auth::user()->id,
            'idmoderator'=> 2,
            'title' => $request->title,
            'description'=> $request->desc,
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function show(Incidencia $incidencia)
    {
        $resultU = User::get()->where('id',$incidencia->idclient)->first();

        return view("incidencies.showincidencies", [
            'row' => $incidencia,
            'users' => $resultU,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidencia $incidencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidencia $incidencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidencia $incidencia)
    {
        Incidencia::where('id',$incidencia->id)->delete();
        return Redirect()->back()->with('Success','Eliminado Nº'.$blog->id);
    }
}
