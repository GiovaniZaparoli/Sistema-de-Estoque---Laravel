@extends('principal')

@section('conteudo')

    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li class="alert alert-danger mt-3">{{ $error }}</li>
            @endforeach
        </ul> 
    </div>

    <div class="container">
        <h1 class="display mt-5 mb-4 text-center">Adicionar Nova Categoria</h1>
        <form action="/categoria/create" method="post">
            <input type="hidden" name="_token" value=" {{ csrf_token() }} " />
            <div class="form-group">
                <label>Nome</label>
                <input name="nome" class="form-control"/>
            </div>
            <div class="form-group d-flex justify-content-center">
                <button class="btn btn-lg btn-info" type="submit">Adicionar</button>
                <a class="btn btn-danger btn-lg mx-5" href="/produtos/novo">Voltar</a>
            </div>
        </form>
    </div>
@stop