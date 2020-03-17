@extends('admin.layouts.principal')

@section('titulo', 'Produtos')

@section('acao', 'Adicionar')

@section('conteudo-principal')

    <form method="post" action="">
        <div class="row">
            <div class="col-8"><label for="produto">Produto</label></div>
            <div class="col-4"><label for="categoria">Categoria</label></div>
          </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-4"><input id="produto" class="form-control mb-2 mr-sm-2   " type="text" name="produto"></div>
                <div class="col-2"><input id="complemento1" class="form-control mb-2 mr-sm-2" type="text" name="complemento1"></div>
                <div class="col-2"><input id="complemento2" class="form-control mb-2 mr-sm-2" type="text" name="complemento2"></div>
                <div class="col-4">
                    <select class="form-control" name="categoria" id="categoria">
                        <option value="0">Celular & Telefone</option>
                        <option value="1">Computadores</option>
                        <option value="2">Hardware</option>
                        <option value="3">Periféricos</option>
                    </select>
                </div>
            </div>
        </div>

        <button class="btn btn-primary">Salvar</button>

    </form>

@endsection
