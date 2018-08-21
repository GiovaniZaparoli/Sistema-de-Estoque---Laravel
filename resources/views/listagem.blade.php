@extends('principal')

@section('conteudo')
    <h1 class="display text-center mt-5 mb-4">Listagem de Produtos</h1>
    <div class="container-fluid d-flex justify-content-center text-center">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <td scope="col">Nome</td>
                            <td scope="col">Valor</td>
                            <td scope="col">Descrição</td>
                            <td scope="col">Quantidade</td>
                            <td scope="col">Tamanho</td>
                            <td scope="col">Detalhes</td>
                            <td scope="col">Excluir</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($produtos as $produto) 
                        <tr class="{{ $produto->quantidade <=1 ? 'alert alert-danger' : ''}}">
                            <td>{{ $produto->nome }}</td>
                            <td>R${{ $produto->valor }},00</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->quantidade }}</td>
                            <td>{{ $produto->tamanho }}</td>
                            <td>{{ $produto->categoria->nome }}
                            <td> <a class="btn btn-info" href="/produtos/show/{{ $produto->id }}">Detalhes</a></td>
                            <td> <a class="btn btn-danger" href="/produtos/remove/{{ $produto->id }}">Excluir</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @if(old('nome'))
        <div class="alert alert-success">
            <h1>Produto {{old('nome')}} adicionado com sucesso!</h1>
        </div>
    @endif
@stop
