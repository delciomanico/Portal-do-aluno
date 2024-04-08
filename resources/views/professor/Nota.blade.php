

@extends('professor.dash')
@section('title','Notas')
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
                                <th>Aluno</th>
                                <th>Mac</th>
                                <th>Prova 1</th>
                                <th>Prova 2</th>
                                <th>----</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($dado))
                            
                            @foreach( $dado as $key => $value)
                                
                            <tr>
                                <td>{{$value->id}}</td>  
                                <td>{{$value->id_aluno}}</td>
                                <td>{{$value->mac}}</td>
                                <td>{{$value->p1}}</td>
                                <td>{{$value->p2}}</td>
                                <td>
                                <form action="edit_nota" method="post">
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
                            @endif
                            
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Aluno</th>
                            <th>Mac</th>
                            <th>Prova 1</th>
                            <th>Prova 2</th>
                            <th>----</th>
                        </tr>
                        </tfoot>
                       
                    </table>
                </div>
            </div>
            <aside class="container">
                @if(!empty($nota))
                <h2>Editar Nota</h2>
                <form action="updatenota" method="post">
                    @csrf
                    @method('put')
                    <div class="form-item">
                        <input type="hidden" name="id" value="{{$nota->id}}">
                        <input type="hidden" name="id_mini" value="{{$nota->id_mini}}"> 
                    </div>
                    <div class="form-item">
                        <label for="">MAC</label>
                        <input type="number" name="mac" value="{{$nota->mac}}">
                    </div>
                    <div class="form-item" >
                        <label for="">Prova 1</label>
                        <input type="number" name="p1" value="{{$nota->p1}}">
                    </div>
                    <div class="form-item">
                        <label for="">Prova 2</label>
                        <input type="number" name="p2" value="{{$nota->p2}}">
                    </div>
                    <div class="form-item">
                        <button type="submit" class="btn">Salvar</button>
                    </div>
                </form>
                @endif
            </aside>
        </section>
    </main>

@endsection
