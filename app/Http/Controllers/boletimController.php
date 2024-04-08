<?php

namespace App\Http\Controllers;

use App\Models\anoLetivo;
use App\Models\miniPauta;
use App\Models\nota;
use App\Models\trimestre;
use App\Models\turma;
use Illuminate\Http\Request;

class boletimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        if(!empty($request->turma)) {
        $dados = [];
        
        $n = miniPauta::select('*')->where('id_trim','=',$request->trimestre)->where('id_turma','=',$request->turma)->get();
        
         
        foreach ($n as $key => $value) {
            $dados[$key] = nota::select('*')->where('id_mini', $value->id)->where('id_aluno',$request->aluno)->get();
        }
        
        return view('aluno.boletim', compact('dados'));
        }else{

        
        return view('aluno.boletim');
    }
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
