@extends('principal')

@section('conteudo')
    <h1 class="display"> Detalhes do Produto {{ $produto->nome }}</h1>
    <ul>
        <li>
            Descrição: {{ $produto->descricao }}
        </li>
        <li>
            Valor: R$ {{ $produto->valor }},00
        </li>
        <li>
            Quantidade: {{ $produto->quantidade }}
        </li>
    </ul>
@stop
