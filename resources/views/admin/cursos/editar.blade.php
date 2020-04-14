@extends('layout.site')

@section('titulo', 'Cursos')

@section('Conteudo')

<div class="container">
<h4 class="center">Editar Cursos</h4>
    <div class="row">
       <form action="{{route('admin.cursos.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
         {{ csrf_field() }}
         <input type="hidden" name="_method" value="put">

        @include('admin.cursos._form')
        <button class="btn deep-red">Atualizar</button>
       </form>
    </div>
    
</div>

@endsection

