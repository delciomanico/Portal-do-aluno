
@extends('professor.dash')
@section('title','Perfil')
@section('conteudo')

    <main >
        <div class="main border" style="max-width: 60%;">
            <div class="row perfil-header">
                
         
               
            </div>

            <div class="row ">
                <div class="col-6">
                    <label for="" class="form-label">Primeiro Nome</label>
                    <input type="text" placeholder="Primeiro nome" class="form-control" readonly>
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Segundo Nome</label>
                    <input type="text" placeholder="Segundo nome" class="form-control" readonly>
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Gmail</label>
                    <input type="text" placeholder="example@gmail.com" class="form-control" readonly>
                </div>
                <div class="col-7">
                    <label for="" class="form-label">BIº</label>
                    <input type="text" placeholder="1245245332323LA002" class="form-control" readonly>
                </div>
                <div class="col-5">
                    <label for="" class="form-label">Status</label>
                    <input type="text" placeholder="Activa" class="form-control" readonly>
                </div>
                <div class="col-6">
                    
                    <input type="button" value="Actualizar" class="btn btn-primary">
                </div>
            </div>
        </div>
    </main>
@endsection
