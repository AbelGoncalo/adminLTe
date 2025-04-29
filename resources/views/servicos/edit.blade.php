@extends('adminlte::page')

@section('title', 'Editar Serviço')

@section('content_header')
<div class="text-center">

    <h1>Sditar Serviço</h1>
</div>
@stop

@section('content')

<div class="container">

    <form action="" method="post">
       @include('servicos._form')
    </form>
</div>

@stop
