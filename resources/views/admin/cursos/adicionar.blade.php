@extends('layout.site')

@section('titulo', 'Cursos')

@section('Conteudo')

<div class="container">
<h4 class="center">Adicionar Cursos</h4>
    <div class="row">
       <form action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
         {{ csrf_field() }}
        @include('admin.cursos._form')

        <button class="btn deep-red">Salvar</button>
       </form>
    </div>
    
</div>

@endsection

