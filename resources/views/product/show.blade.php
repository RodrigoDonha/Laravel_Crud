@extends('layouts.main')
@section('title' , 'Teste Crud Laravel')
@section('content')

<div>
    <div>
        <h1>PRODUTO</h1>
    </div>
    <div>
        <input class="input" readonly type="number" name="code" id="code" placeholder="código" value="{{$product['code']}}">
        <input class="input" readonly type="number" name="amount" id="amount" placeholder="quantidade" value="{{$product['amount']}}">
        <input class="input" readonly type="text" name="name" id="name" placeholder="nome" value="{{$product['name']}}">
        <input class="input" readonly type="number" name="value" id="value" placeholder="valor" value="{{$product['value']}}">
    </div>
    <div>
        <a href="{{ URL::previous() }}" class="btn btn-round" style="background-color: #5A6268; border: none; color: white">
            <i class="fa fa-arrow-left"></i> Voltar
        </a>
    </div>
</div>

@endsection

<style>
.input {
    border: 1px solid red;

}
</style>
