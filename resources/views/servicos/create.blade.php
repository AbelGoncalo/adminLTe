@extends('adminlte::page')

@section('title', 'Novo Serviços')

@section('content_header')
<div class="text-center">

    <h1>Novo Serviço</h1>
</div>
@stop

@section('content')

    @include('_mensagem')

<div class="container">

    <form action="{{route('servicos.store')}}" method="post">
        @include('servicos._form')
    </form>
</div>

@stop
