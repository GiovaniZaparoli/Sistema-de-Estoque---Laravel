@extends('principal')

@section('conteudo')


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center my-3">Previsão do tempo para cidade de {{ $clima->name }}</h1>
                <table class="table table-dark text-center">
                    <thead>
                        <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Temperatura Máxima</th>
                            <th scope="col">Temperatura Mínima</th>
                            <th scope="col">Chance de chuva</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $clima->data as $date)
                            <tr>
                                <td>{{ $date->date_br }}</td>
                                <td>{{ $date->temperature->max }}C°</td>
                                <td>{{ $date->temperature->min }}C°</td>
                                <td>{{ $date->rain->probability }}%</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <a class="btn btn-success" href="/home">Voltar ao menu Principal</a>
            </div>
        </div>


    </div>


@stop