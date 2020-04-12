@extends('layout.site')

@section('titulo', 'Cursos')

@section('Conteudo')

<div class="container">
<h4 class="center">Lista de cursos</h4>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Publicado</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $registro)
                <tr>
                    <td>{{$registro->id}}</td>
                    <td>{{$registro->titulo}}</td>
                    <td>{{$registro->descricao}}</td>
                    <td><img width="120" src="{{asset($registro->imagem)}}" alt=""></td>
                    <td>{{$registro->publicado}}</td>
                    <td>
                        <a href="{{ route('admin.cursos.editar', $registro->id) }}" class="btn deep-blue">Editar</a>
                        <a href="{{ route('admin.cursos.deletar', $registro->id) }}" class="btn deep-red">Deletar</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
    <a href="{{route('admin.cursos.adicionar')}}" class="btn deep-green">Adicionar</a>
    </div>
</div>

@endsection

