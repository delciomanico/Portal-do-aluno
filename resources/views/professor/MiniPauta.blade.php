
@php 
use App\Models\disciplina;
use App\Models\trimestre;
use App\Models\turma;
use App\Models\miniPauta;
@endphp

@extends('professor.dash')
@section('title','mini')
@section('conteudo')
<main>
        <section>
            <div class="container">
                <div class="menu">
                    <input type="search" name="" id="" placeholder="pesquisar">
                    <button >Buscar</button>
                </div>
        
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Diciplina</th>
                                <th>Turma</th>
                                <th>Trimestre</th>
                                <th>----</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                            $mini = miniPauta::all();
                            @endphp
                            @foreach( $mini as $key => $value)
                                
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->id_disc}}</td>
                                <td>{{$value->id_turma}}</td>
                                <td>{{$value->id_trim}}</td>
                                <td>
                                    <form action="notas" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$value->id}}">
                                        <button type="submit" class="btn btn-1" >E</button>
                                    </form>
                                    <form action="notass" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$value->id}}">
                                        <button type="submit" class="btn btn-2" >D</button>
                                    </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                            
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Diciplina</th>
                                <th>Turma</th>
                                <th>Trimestre</th>
                                <th>----</th>
                            </tr>
                        </tfoot>
                       
                    </table>
                </div>
            </div>
            <aside class="container">
                <h2>Nova MiniPauta</h2>
                <form action="/nova_mini" method="get">
                    <div class="form-item">
                        <input type="hidden" name="prof" value="1">
                    </div>
                    <div class="form-item">
                        <label for="">turma</label>
                        <select name="turma" id="">
                            @foreach( turma::all() as $key => $value) 

                            <option value="{{$value->id}}">{{$value->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-item" >
                        <label for="">trimestre</label>
                        <select name="trimestre" id="">
                            @foreach( trimestre::all() as $key => $value) 

                            <option value="{{$value->id}}">{{$value->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="">disciplina</label>
                        <select name="disciplina" id="">
                            @foreach( disciplina::all() as $key => $value) 

                            <option value="{{$value->id}}">{{$value->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-item">
                        <button type="submit" class="btn">Criar</button>
                    </div>
                </form>
            </aside>
        </section>
    </main>

@endsection
