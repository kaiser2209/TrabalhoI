<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function listar()
    {
        return view('admin.fornecedores.listar');
    }
}
