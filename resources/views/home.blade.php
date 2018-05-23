@extends('layouts.app')

@section('Contenido')
<div class="container">
<div class="col-xs-12">

    <div class="page-header">
        
    </div>
        
    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                    <ul class="thumbnails">
                        
                             @foreach($Posts as $Post )
                                
                                <li class="col-sm-3">
                                 <div class="fff">
                                    <div class="thumbnail">
                                        <a href="{{ route('posts.show',$Post->id) }}"><img src="http://icons.iconarchive.com/icons/pelfusion/folded-flat/128/News-icon.png" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>{{ $Post->Titulo }}</h4> 
                                        <a class="btn btn-mini" href="{{ route('posts.show',$Post->id) }}">» Leer Mas</a>
                                    </div>
                                </div>
                               </li>

                               
                             @endforeach
                        
                    </ul>
              </div><!-- /Slide1 --> 
             <div class="item">
                    <ul class="thumbnails">
                          @foreach($Posts as $Post )
                                
                                <li class="col-sm-3">
                                 <div class="fff">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://icons.iconarchive.com/icons/pelfusion/folded-flat/128/News-icon.png" alt=""></a>
                                    </div>
                                    <div class="caption">
                                        <h4>{{ $Post->Titulo }}</h4> 
                                        <a class="btn btn-mini" href="#">» Leer Mas</a>
                                    </div>
                                </div>
                               </li>

                               
                             @endforeach
                    </ul>
              </div><!-- /Slide2 --> 
           {{--  <div class="item">
                    <ul class="thumbnails">
                        <li class="col-sm-3">   
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                    <a class="btn btn-mini" href="#">» Read More</a>
                                </div>
                            </div>
                        </li>
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                    <a class="btn btn-mini" href="#">» Read More</a>
                                </div>
                            </div>
                        </li>
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                    <a class="btn btn-mini" href="#">» Read More</a>
                                </div>
                            </div>
                        </li>
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                    <a class="btn btn-mini" href="#">» Read More</a>
                                </div>
                            </div>
                        </li>
                    </ul>
              </div> --}}
        </div>
        
       
       <nav>
            <ul class="control-box pager">
                <li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                <li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
            </ul>
        </nav>
       <!-- /.control-box -->   
                              
    </div><!-- /#myCarousel -->
        
</div><!-- /.col-xs-12 -->          

</div><!-- /.container -->


{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach(App\Post::latest()->get() as $post)
             <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('posts.show',$post) }}">{{ $post->Titulo }}
                    </div></a>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</div> --}}
@endsection
