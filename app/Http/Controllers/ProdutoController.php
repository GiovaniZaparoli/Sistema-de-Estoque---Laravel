<?php
namespace App\Http\Controllers;
use App\Produto;
use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use App\Http\Requests\ProdutoRequest;
use Auth;
use App\Categoria;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailtrap;
use App\User;
use App\Jobs\SendEmail;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $produtos = Produto::all();
        return view('listagem')->with('produtos', $produtos);
    }

    public function show($id)
    {
        $produto = Produto::find($id);
        return view('detalhes')->with('produto', $produto);
    }

    public function remove($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@index');
    }

    public function novo()
    {
        return view('formulario')->with('categorias', Categoria::all());
    }

    public function create(ProdutoRequest $request)
    {
        $conteudo = Produto::create($request->all());
        SendEmail::dispatch($conteudo);
        return redirect()->route('listagem');   
    }
}
