@extends('layout.site')

@section('titulo', 'Cursos')

@section('Conteudo')

<div class="container">
<h4 class="center">Entrar</h4>
    <div class="row">
       <form action="{{route('site.login.entrar')}}" method="post" >
         {{ csrf_field() }}

         <div class="input-field">
            <input type="text" name="email">
            <label>E-mail</label>
        </div>

        <div class="input-field">
            <input type="password" name="senha">
            <label>Senha</label>
        </div>

        <button class="btn deep-red">Entrar</button>
       </form>
    </div>
    
</div>

@endsection

