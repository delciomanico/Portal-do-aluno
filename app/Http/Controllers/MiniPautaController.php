<?php

namespace App\Http\Controllers;

use App\Models\turmaDisciplina;
use App\Models\miniPauta;
use App\Models\aluno_turma;
use App\Models\nota;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class MiniPautaController extends Controller
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
    public function create(Request $request ,nota $nota,aluno_turma $aluno, miniPauta $miniPauta, turmaDisciplina $turmaDisciplina)
    {
        //
        $v1 =  count($miniPauta::select("*")->where("id_turma", $request->turma )->where("id_disc", $request->disciplina)->where("id_trim", $request->trimestre)->get());
        $v2 = count($turmaDisciplina::select("*")->where("id_turma", $request->turma)->where("id_disc", $request->disciplina)->get());
        if($v1 == 0 && $v2 != 0){
            $alunos = $aluno::select("*")->where("id_turma", $request->turma)->get();
            if(count($alunos) != 0){
                $miniPauta::create([
                    "id_prof"=> $request->prof,
                    "id_disc"=> $request->disciplina,
                    "id_turma"=> $request->turma,
                    "id_trim"=> $request->trimestre,
                ]);
                $last = miniPauta::select("id")->latest('id')->get();
                $last = $last->toArray();
                if($last[0] == null){
                    $last[0]['id'] = 1;
                }
                foreach($alunos as $row){
                    $nota::create([
                        "id_mini"=> $last[0]["id"],
                        "id_aluno"=> $row->id_aluno,
                        "mac" => 0,
                        "p1" => 0,
                        "p2" => 0
                    ]);
                }
                echo("<script>alert('criado com sucesso') </script>");

                return redirect("prof");
            }else{
                echo("<script>alert('turma sem aluno') </script>");
            }
        }else{
            echo("<script>alert('mini pauta existente') </script>");
            return redirect("prof");
        }
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
    public function show(miniPauta $miniPauta)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(miniPauta $miniPauta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, miniPauta $miniPauta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(miniPauta $miniPauta)
    {
        //
    }
}
