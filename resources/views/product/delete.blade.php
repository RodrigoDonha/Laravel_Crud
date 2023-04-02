@extends('layouts.main')
@section('title' , 'Teste Crud Laravel')
@section('content')

<div class="container-fluid">
    <h3>DELETAR PRODUTO</h3>
</div>
<div>
    <form action="/product/{{$product['id']}}/destroy" method="POST">
        @csrf
        @method('DELETE')
        <div class="d-flex justify-content-center mb-3">
            <label class="p-2 border" for="id">Id: {{$product['id']}}</label>
            <label class="p-2 border" for="code">Código: {{$product['code']}}</label>
            <label class="p-2 border" for="amount">Quantidade: {{$product['amount']}}</label>
            <label class="p-2 border" for="name">Nome: {{$product['name']}}</label>
            <label class="p-2 border" for="value">Valor R$: {{$product['value']}}</label>
        </div>
        <div class="d-flex">
            <a class="btn btn-warning d-flex p-2 m-2" href="{{ URL::previous() }}">Voltar</a>
            <p class="d-flex p-2 m-2"><strong>Tem certeza que deseja deletar o este produto?</strong></p>
            <button class="btn btn-danger p-2 m-2" type="submit">CONFIRMAR</button>
        </div>
    </form>
</div>
@endsection
