@extends('layouts.app')
@section('Contenido')
	<div class="container">
		<h1>{{ $post->Titulo }}</h1>
		<p>{{ $post->Cuerpo }}<p>
	</div>
@stop