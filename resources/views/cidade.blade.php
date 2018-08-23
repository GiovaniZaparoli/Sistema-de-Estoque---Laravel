@extends('principal')

@section('conteudo')


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center my-3">Escolha a cidade</h1>
                <form action="/clima" method="post">
                    <input type="hidden" name="_token" value=" {{ csrf_token() }} " />
                    <div class="form-group">
                        <label>Cidade</label>
                        <select name="categoria_id" class="form-control">
                            @foreach($cidades as $cidade)
                                <option value="{{ $cidade->id }}">{{ $cidade->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-lg btn-info" type="submit">Consultar</button>
                    <a class="btn btn-info btn-lg" href="/home">Página Principal</a>
                </form>
            </div>
        </div>
    </div>


@stop