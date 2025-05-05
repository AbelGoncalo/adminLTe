@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <div class="text-center">

        <h1>Lista de Usuarios</h1>
    </div>
@stop

@section('content')

    <div class="container">

        @if(session('mensagem'))
            <div class="alert alert-success">
                {{session('mensagem')}}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{ $usuario->id }}</th>
                        <td>{{ $usuario->name?? '' }}</td>
                        <td>{{ $usuario->email?? '' }}</td>

                        <td>
                            <a href="{{route('usuarios.edit',$usuario->id)}}" class="btn btn-success" href="">Editar</a>
                            <a class="btn btn-danger" href="{{route('usuarios.destroy',$usuario->id)}}">Eliminar</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th></th>
                        <th class="alert-infp text-alert">
                            Nenhum usuario encontrado!
                        </th>
                        <th></th>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="d-flex justify-content-center">

            {{ $usuarios->links() }}
        </div>

        <div class="float-right">
            <a href="{{route('servicos.create')}}" href="" class="btn btn-success">Novo Usuario</a>
        </div>

    </div>
@stop
