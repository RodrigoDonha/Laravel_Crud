@extends('layouts.main')
@section('title' , 'Teste Crud Laravel')
@section('content')

<div>
    <div>
        <h1>EDITAR PRODUTO</h1>
    </div>
    <form action="/product/{{$product['id']}}/update" method="POST">
        @csrf
        @method('PUT')

        <div class="d-flex justify-content-center">
            <div class="p1 m-1 border">
                <label class="input p1 m-1" for="code">CÓDIGO:</label>
                <input class="input p1 m-1" type="number" name="code" id="code" placeholder="código" value="{{$product['code']}}">
            </div>
            <div class="p1 m-1 border">
                <label class="input p1 m-1" for="amount">QUANTIDADE:</label>
                <input class="input p1 m-1" type="number" name="amount" id="amount" placeholder="quantidade" value="{{$product['amount']}}">
            </div>
            <div class="p1 m-1 border">
                <label class="input p1 m-1" for="name">NOME:</label>
                <input class="input p1 m-1" class="input p2 m-2" type="text" name="name" id="name" placeholder="nome" value="{{$product['name']}}">
            </div>
            <div class="p1 m-1 border">
                <label class="input p1 m-1" for="value">VALOR R$:</label>
                <input class="input p1 m-1" type="number" name="value" id="value" placeholder="valor" value="{{$product['value']}}">
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-warning d-flex p-2 m-2" href="{{ URL::previous() }}">Voltar</a>
            <button class="btn btn-success p-2 m-2" type="submit">EDITAR</button>
        </div>
    </form>
</div>

@endsection
