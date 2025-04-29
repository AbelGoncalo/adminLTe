@extends('adminlte::page')

@section('title', 'Serviços')

@section('content_header')
    <div class="text-center">

        <h1>Lista de Serviços</h1>
    </div>
@stop

@section('content')

    <div class="container">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($servicos as $servico)
                    <tr>
                        <th scope="row">{{ $servico->id }}</th>
                        <td>{{ $servico->nome }}</td>
                        <td>
                            <a href="{{route('servicos.edit',$servico->id)}}" class="btn btn-success" href="">Editar</a>
                            <a class="btn btn-danger" href="">Eliminar</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th></th>
                        <th class="alert-infp text-alert">
                            Nenhum serviço encontrado!
                        </th>
                        <th></th>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="d-flex justify-content-center">

            {{ $servicos->links() }}
        </div>

        <div class="float-right">
            <a href="{{route('servicos.create')}}" href="" class="btn btn-success">Novo Serviço</a>
        </div>

    </div>



@stop
