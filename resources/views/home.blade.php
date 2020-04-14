@extends('layout.site')

@section('titulo', 'Cursos')

@section('Conteudo')

<div class="container">
    <h4 class="center">Lista de cursos</h4>
        <div class="row">
            @foreach($cursos as $curso)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset($curso->imagem)}}">                    </div>
                    <div class="card-content">
                        <h4>{{$curso->titulo}}</h4>
                        <p>{{$curso->descricao}}</p>
                    </div>
                    <div class="card-action">
                        <a href="./admin/cursos">Ver mais...</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
</div>

@endsection