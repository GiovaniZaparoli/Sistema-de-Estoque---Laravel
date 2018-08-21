@extends('principal')

@section('conteudo')

    <div class="container mt-5">
        <div class="row">
            <div class="offset-4 col-md-4 offset-4">
                <form action="/send" method="post">
                    <input type="hidden" name="_token" value=" {{ csrf_token() }} " />
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" class="from-control"/>
                    </div>
                    <div class="form-group">
                        <label>Mensagem</label>
                        <textarea name="mensagem" id="1" cols="30" rows="5"></textarea>
                    </div>
                    <button class="btn btn-info btn-block" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>

@stop