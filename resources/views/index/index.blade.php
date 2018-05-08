@extends('layouts.app')
@section('Contenido')

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
          <img src="/img/slide1.png">
           <div class="carousel-caption">
            <h3>Headline</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>
          </div>
        </div><!-- End Item -->
 
         <div class="item">
          <img src="/img/slider2.png">
           <div class="carousel-caption">
            <h3>Headline</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="/img/slider3.png">
           <div class="carousel-caption">
            <h3>Headline</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="http://placehold.it/1200x400/999999/cccccc">
           <div class="carousel-caption">
            <h3>Headline</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
          </div>
        </div><!-- End Item -->
                
      </div><!-- End Carousel Inner -->


    	<ul class="nav nav-pills nav-justified">
          <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small>Lorem ipsum dolor sit</small></a></li>
          <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Lorem ipsum dolor sit</small></a></li>
          <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>Lorem ipsum dolor sit</small></a></li>
          <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services<small>Lorem ipsum dolor sit</small></a></li>
        </ul>


    </div><!-- End Carousel -->

     <div class="well dash-box">
               <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Visitantes <a href="" title="contador de visitas para web"><img src="https://counter5.allfreecounter.com/private/contadorvisitasgratis.php?c=3wflxchbkch8em5s84nsjcbx7bspsm7p" border="0" title="contador de visitas para web" alt="contador de visitas para web"></a> </h2>
               
             
             
             </div>
       
    
</div>



@stop