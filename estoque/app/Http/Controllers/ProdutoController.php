<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

    public function lista() {
        $produtos = DB::select('select * from produtos');
        return view('produto.listagem')->withProdutos($produtos);
    }

    public function mostra($id) {
        $resposta = DB::select('select * from produtos where id = ?', [$id]);
        $return = !empty($resposta) ? view('produto.detalhes')->with('p', $resposta[0]) : "Esse produto não existe";
        return $return;
    }

    public function novo() {
        return view('produto.formulario');
    }

    public function adiciona() {
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $descricao = Request::input('descricao');
        $quantidade = Request::input('quantidade');
        DB::table('produtos')->insert([
            'nome' => $nome,
            'valor' => $valor,
            'descricao' => $descricao,
            'quantidade' => $quantidade
        ]);
        return view('produto.adicionado')->with('nome', $nome);
    }

}
