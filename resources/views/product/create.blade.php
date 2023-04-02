@extends('layouts.main')
@section('title' , 'Teste Crud Laravel')
@section('content')

<div>
    <h3>NOVO PRODUTO</h3>

    <form action="/product/store" method="post">
        @csrf
        <div class="p-3 m-3">
            <input class="input p-1" type="number" name="code" id="code" placeholder="código">
            <input class="input p-1" type="number" name="amount" id="amount" placeholder="quantidade">
            <input class="input p-1" type="text" name="name" id="name" placeholder="nome">
            <input class="input p-1" type="number" name="value" id="value" placeholder="valor">
        </div>
        <div class="p-3 d-flex justify-content-between">
            <div>
                <a href="{{ URL::previous() }}" class="btn btn-warning">
                    <i class="fa fa-arrow-left"></i> Voltar
                </a>
            </div>
            <div>
                <button class="btn btn-success" type="submit">Salvar</button>
            </div>
        </div>
    </form>

</div>

@endsection


<style>
.input {
    border: 1px solid;
}
</style>
