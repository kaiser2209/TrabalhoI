{{-- Extender o layout principal --}}
@extends('admin.layouts.principal')

{{-- Section para o titulo --}}
@section('titulo','Produtos')

{{-- Section para a acao --}}
@section('acao', 'Listar')

{{-- Section Principal --}}
@section('conteudo-principal') {{-- Tem que colocar o nome do yeild onde quero jogar o conteudo  --}}
<a href="{{route('produtos.form_adicionar')}}" class="btn btn-primary mt-n4 mb-2 float-right">
    Adicionar
</a>

<table class="table table-hover">
    <tr>
        <th>Produto</th>
        <th></th>
        <th></th>
        <th>Categoria</th>
        <th></th>
    </tr>
    <tr>
        <td>Smartphone Xiaomi Redmi Note 8</td>
        <td>64 gb</td>
        <td>4 gb ram</td>
        <td>Celular & Telefone</td>
        <td class="d-flex justify-content-end">
            <span class="btn btn-info btn-sm" title="Editar">
                <i class="fas fa-edit fa-fw"></i>
            </span>
            <button class="btn btn-danger btn-sm ml-1" title="Excluir">
                <i class="far fa-trash-alt fa-fw"></i>
            </button>
        </td>
    </tr>
    <tr>
        <td>Smartphone Asus Zenfone 6</td>
        <td>64 gb</td>
        <td>6 gb ram</td>
        <td>Celular & Telefone</td>
        <td class="d-flex justify-content-end">
            <span class="btn btn-info btn-sm" title="Editar">
                <i class="fas fa-edit fa-fw"></i>
            </span>
            <button class="btn btn-danger btn-sm ml-1" title="Excluir">
                <i class="far fa-trash-alt fa-fw"></i>
            </button>
        </td>
    </tr>
    <tr>
        <td>Computador HP Pro A MT</td>
        <td>AMD Ryzen 5</td>
        <td>4gb ram</td>
        <td>Computadores</td>
        <td class="d-flex justify-content-end">
            <span class="btn btn-info btn-sm" title="Editar">
                <i class="fas fa-edit fa-fw"></i>
            </span>
            <button class="btn btn-danger btn-sm ml-1" title="Excluir">
                <i class="far fa-trash-alt fa-fw"></i>
            </button>
        </td>
    </tr>
    <tr>
        <td>SSD Kingstom A400</td>
        <td>240 gb</td>
        <td>SATA</td>
        <td>Hardware</td>
        <td class="d-flex justify-content-end">
            <span class="btn btn-info btn-sm" title="Editar">
                <i class="fas fa-edit fa-fw"></i>
            </span>
            <button class="btn btn-danger btn-sm ml-1" title="Excluir">
                <i class="far fa-trash-alt fa-fw"></i>
            </button>
        </td>
    </tr>
    <tr>
        <td>Placa de Vídeo NVidia GTX 1660</td>
        <td>GTX 1660</td>
        <td>6gb</td>
        <td>Hardware</td>
        <td class="d-flex justify-content-end">
            <span class="btn btn-info btn-sm" title="Editar">
                <i class="fas fa-edit fa-fw"></i>
            </span>
            <button class="btn btn-danger btn-sm ml-1" title="Excluir">
                <i class="far fa-trash-alt fa-fw"></i>
            </button>
        </td>
    </tr>

</table>

@endsection
