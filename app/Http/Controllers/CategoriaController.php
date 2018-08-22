<?php

namespace App\Http\Controllers;
use Request;
use App\Categoria;
use App\Http\Requests\CategoriaRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{

      public function __construct()
    {
        $this->middleware('auth');
    }

    public function novo()
    {
        return view('categoria');
    }

    public function create(CategoriaRequest $request)
    {
        Categoria::create($request->all());
        return view('formulario')->with('categorias', Categoria::all());   
    }
}
