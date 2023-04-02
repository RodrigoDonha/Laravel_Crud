@extends('layouts.main')
@section('title' , 'Teste Crud Laravel')
@section('content')

<div class="container-fluid">
    <h1>DELETAR PRODUTO</h1>
</div>
<div>
    <form action="/product/{{$product['id']}}/destroy" method="DELETE">
        @csrf
        @method('DELETE')
        <div>
            <label for="id">Id: {{$product['id']}}</label>
            <label for="code">Código: {{$product['code']}}</label>
            <label for="amount">Quantidade: {{$product['amount']}}</label>
            <label for="name">Nome: {{$product['name']}}</label>
            <label for="value">Valor R$: {{$product['value']}}</label>
        </div>
        <div>
            <p><strong>Tem certeza que deseja deltar o este produto?</strong></p>
            <button class="btn btn-danger" type="submit">CONFIRMAR</button>
        </div>
        <div>
            <a href="{{ URL::previous() }}" class="btn btn-round" style="background-color: #5A6268; border: none; color: white">
                <i class="fa fa-arrow-left"></i> Voltar
            </a>
        </div>
    </form>
</div>
@endsection
