@extends('layouts.main')
@section('title' , 'Teste Crud Laravel')
@section('content')

<div class="container-fluid">
    <div class="button_create">
        <a class="btn btn-success" href="product/create"> <i class="fa fa-plus"></i> NOVO PRODUTO </a>
    </div>

    <div>
        <table class="table border border-primary">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Código</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor R$</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $products as $product )
                    <tr>
                        <th scope="row">{{Strval($product->id)}}</th>
                        <td>{{Strval($product->code)}}</td>
                        <td>{{Strval($product->amount)}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->value}}</td>
                        <td>
                            <a class="btn btn-info" href="product/{{$product->id}}"> <i class="bi bi-eye"></i> VER </a>
                            <a class="btn btn-warning" href="product/{{$product->id}}/edit"> <i class="bi bi-pencil"></i> EDITAR </a>
                            <a class="btn btn-danger" href="product/{{$product->id}}/delete"><i class="bi bi-trash-fill"></i> EXCLUIR </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection

<style>
    .button_create {
        padding: 15px;
    }
</style>
