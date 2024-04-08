<?php

namespace App\Http\Controllers;

use App\Models\nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(nota $nota, Request $request)
    {
        //
        $dado = $nota::select('*')->where('id_mini','=',$request->id)->get();

        return view('professor.Nota',compact('dado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nota $n, Request $request)
    {
        //
        $nota = $n::findOrFail($request->id);
        return view('professor.Nota', compact('nota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, nota $nota)
    {
        //
        $nota = $nota::findOrFail($request->id);
        $nota->mac = $request->mac;
        $nota->p1 = $request->p1;
        $nota->p2 = $request->p2;
        $nota->save();
        $dado = nota::select('*')->where('id_mini','=',$request->id_mini)->get();


        return view('professor.Nota',compact('dado'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nota $nota)
    {
        //
    }
}
