@extends('layouts.main')

@section('title','Sedatines')

@section('contend')

    <div class="left-side">
        
    </div>

    <div class="main">
        <div id="entities-create-container" class="col-md-6 offset-md-3">
            <form action="/entities" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome principal">
                </div>
                <div class="form-group">
                    <label for="other_names">Outros nome:</label>
                    <input type="text" class="form-control" id="other_names" name="other_names" placeholder="Outros nomes que a chaman">
                </div>
                <div class="form-group">
                    <label for="gender">Genero:</label>
                    <input type="text" class="form-control" id="gender" name="gender" placeholder="Genero">
                </div>

                <div class="form-group">
                    <label for="image">Imagens</label>
                    <input type="file" id="image" name="image" class="form-control-file">
                </div>
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </form>
        </div>

    </div>

    <div class="right-side">
        
    </div>
    
@endsection
