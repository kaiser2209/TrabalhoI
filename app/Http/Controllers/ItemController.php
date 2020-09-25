<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function itens() {
        $titulo = 'Trabalho Programação WEB II';
        $subtitulo = 'Lista de Produtos';
        $produtos = ['SSD Kingstom A400', 'Placa de Vídeo NVidia GTX 1660', 'Computador HP Pro A MT'];

        return view('itens', compact('titulo', 'subtitulo', 'produtos'));
    }
}
