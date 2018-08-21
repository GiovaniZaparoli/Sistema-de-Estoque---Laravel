<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Produto;

class Mailtrap extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;
    public $valor;
    public $descricao;
    public $tamanho;
    public $quantidade;
    public $categoria;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Produto $produto)
    {
        $this->nome = $produto->nome;
        $this->valor = $produto->valor;
        $this->descricao = $produto->descricao;
        $this->quantidade = $produto->quantidade;
        $this->tamanho = $produto->tamanho;
        $this->categoria = $produto->categoria->nome;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->from('giovani.zaparoli@outlook.com')->view('mail')->with(['nome' => $this->nome, 
                                                        'valor' => $this->valor,
                                                        'descricao' => $this->descricao,
                                                        'quantidade' => $this->quantidade,
                                                        'tamanho' => $this->tamanho,
                                                        'categoria' => $this->categoria]);
    }
}
