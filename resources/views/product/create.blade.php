@extends('layouts.main')
@section('title' , 'Teste Crud Laravel')
@section('content')

<div>
    <h1>NOVO PRODUTO</h1>

    <form action="/product/store" method="post">
        @csrf
        <div>
            <input class="input" type="number" name="code" id="code" placeholder="código">
            <input class="input" type="number" name="amount" id="amount" placeholder="quantidade">
            <input class="input" type="text" name="name" id="name" placeholder="nome">
            <input class="input" type="number" name="value" id="value" placeholder="valor">
        </div>
        <div>
            <button type="submit">Salvar</button>
        </div>
    </form>
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
