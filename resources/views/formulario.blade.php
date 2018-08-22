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
        <h1 class="display mt-5 mb-4 text-center">Adicionar Novo Produto</h1>
        <form action="/produtos/create" method="post">
            <input type="hidden" name="_token" value=" {{ csrf_token() }} " />
            <div class="form-group">
                <label>Nome</label>
                <input name="nome" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Valor</label>
                <input name="valor" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input name="quantidade" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Tamanho</label>
                <input name="tamanho" class="form-control"/>      
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select name="categoria_id" class="form-control">
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endforeach
                </select>
                <a class="btn btn-success mt-2" href="/categorias/novo">Nova Categoria</a>
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <input name="descricao" class="form-control"/>      
            </div>
            <div class="form-group d-flex justify-content-center">
                <button class="btn btn-lg btn-info" type="submit">Adicionar</button>
                <a class="btn btn-danger btn-lg mx-5" href="/produtos">Voltar</a>
            </div>
        </form>
    </div>
@stop