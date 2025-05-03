@extends('adminlte::page')

@section('title', 'Editar Serviço')

@section('content_header')
<div class="text-center">

    <h1>Sditar Serviço</h1>
</div>
@stop

@section('content')

@include('_mensagem')

<div class="container">
    <form action="{{route('servicos.update',$servico->id)}}" method="post">
        @method('PUT')
       @include('servicos._form')
    </form>
</div>

@stop
