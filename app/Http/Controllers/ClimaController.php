<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Pool;
use GuzzleHttp\Client;


class ClimaController extends Controller
{
    protected $clima;

    public function __construct()
    {
        $this->clima = new Client();
    }

    public function cidade()
    {
        $response = $this->clima->request('GET', 'http://apiadvisor.climatempo.com.br/api/v1/locale/city?state=SP&token=875459ddc34faf7e696afe4302c99a47');
        $body = json_decode($response->getBody());
        return view('cidade')->with('cidades', $body);
    }

    public function tempo(Request $request)
    {
        $inputs = $request->all();
        $id = $inputs['categoria_id']; 
        $response = $this->clima->request('GET', "http://apiadvisor.climatempo.com.br/api/v1/forecast/locale/$id/days/15?token=875459ddc34faf7e696afe4302c99a47");  
        $body = json_decode($response->getBody());
        return view('clima')->with('clima', $body);
    }
}

