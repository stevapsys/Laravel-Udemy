@extends('layout.site')

@section('titulo', 'Contatos')

@section('Conteudo')

<h3>Essa é a view Index</h3>

@foreach($contatos as $contato)
    	<p>
        {{$contato->nome}}
        {{$contato->tel}}

        </p>
@endforeach

@endsection 