@php
use App\Models\miniPauta;
use App\Models\anoLetivo;
use App\Models\turma;
use App\Models\aluno_turma;
use App\Models\trimestre;
use Illuminate\Support\Facades\DB;
$token = auth()->guard('aluno')->user()->id_aluno;
@endphp
@extends('aluno.dash')
@section('title','mini')
@section('conteudo')

<main>
        <main>
            <section>
                <div class="container">
                    <form action="boletim" method="post">
                    @csrf
                        <div class="menu">
                            <input type="hidden" value="{{$token}}" name="aluno">
                            @foreach( anoLetivo::all() as $key => $value)
                                <select name="ano"  id="" @php if(!empty($_POST['ano'])){ echo "disabled";} @endphp>
                                    <option value="">Ano lectivo</option>
                                    <option value="{{$value->id}}" @php if(!empty($_POST['ano']) && ($_POST['ano'] == $value->id)){ echo "selected";} @endphp>{{$value->nome}}</option>
                                </select>
                            @endforeach
                                @if(!empty($_POST['ano']))
                            @php 
                                $t = DB::select("SELECT a.id_turma, t.nome  from aluno_turmas a, turmas t WHERE id_aluno = 1 AND id_turma in (SELECT id from turmas WHERE id_letivo= {$_POST['ano']})");
                            @endphp
                                <select name="turma" id="">
                            @foreach($t as $key => $value)
                                    <option value="">Turma</option>
                                    <option value="{{$value->id_turma}}">{{$value->nome}}</option>
                            @endforeach
                                </select>
                                <select name="trimestre" id="">
                            @foreach(trimestre::select('*')->where('id_letivo',$_POST['ano'])->get() as $key => $value)
                                    <option value="">Trimestre</option>
                                    <option value="{{$value->id}}">{{$value->nome}}</option>
                            @endforeach
                                </select>
                            @endif
                            
                            <button type="submit">Buscar</button>
                        </div>
                    </form>
            
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Diciplina</th>
                                    <th>MAC</th>
                                    <th>PROVA 1</th>
                                    <th>PROVA 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($dados))
                                @foreach($dados as $key => $value)
                                @php
                                $mini = miniPauta::select('id_disc')->where('id',$value[$key]->id_mini)->get();
                                @endphp
                                
                                <tr>
                                    <td>{{$value[$key]->id}}</td>
                                    <td>{{$mini[0]->id_disc}}</td>
                                    <td>{{$value[$key]->mac}}</td>
                                    <td>{{$value[$key]->p1}}</td>
                                    <td>
                                    {{$value[$key]->p2}}
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                
                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Diciplina</th>
                                    <th>MAC</th>
                                    <th>PROVA 1</th>
                                    <th>PROVA 2</th>
                                </tr>
                            </tfoot>
                           
                        </table>
                    </div>
                    <div class="menu-2">
                        <button >PDF</button>
                    </div>
                </div>

                
        </section>
    </main>
@endsection
