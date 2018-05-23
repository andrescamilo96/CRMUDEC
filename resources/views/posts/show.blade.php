@extends('layouts.app')
@section('Contenido')
<div class="post" id="post1">
    <div class="caption">
        <div class="author">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyxi3ggbJf-7kTYcpV-mCW0hsRySYIctC10fP66XYyJa0Rc9ELDg" alt="" class="avatar">  
            <div class="name"><a>@CRMADMONFACATIVA</a></div><br/>
            <div class="meta"><i class="glyphicon glyphicon-calendar"></i> {{ $post->created_at }} <i class="glyphicon glyphicon-map-marker"></i> puplic</div>
        </div> 
        <div class="text">
            <p>{{ $post->Cuerpo }}</p>
           
        </div>
    </div><!-- / .caption -->
    <div class="category">{{ $post->Titulo }}</div>
    <div class="content">
        <img src="https://www.timeshighereducation.com/sites/default/files/istock-508730961_0.jpg" class="img" alt="">
    </div><!-- / .content -->
</div>
	{{-- <div class="container">
		<h1>{{ $post->Titulo }}</h1>
		<p>{{ $post->Cuerpo }}<p>
	</div> --}}
@stop