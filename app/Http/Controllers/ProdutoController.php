<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function listar()
    {

        return view('admin.produtos.listar');
    }

    public function adicionar()
    {
        return view('admin.produtos.form');
    }
}
