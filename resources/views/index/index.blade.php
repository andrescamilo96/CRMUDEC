<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>CRM-Universidad Cundinamarca</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Employ Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
          setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
          window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="cssGraduado/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="cssGraduado/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!-- For Text About slider -->
      <link rel="stylesheet" href="cssGraduado/css/flexslider.css" type="text/css" media="all" />
      <!-- //For Text About slider -->
      <!-- For Service pie-chart -->
      <link rel="stylesheet" href="cssGraduado/css/morris.css">
      <!--//For Service pie-chart -->
      <!--stylesheets-->
      <link href="cssGraduado/css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
      <link rel="icon" type="image/png" href="../img/icon.png" />
   </head>
   <body>
      <div class="header-outs" id="home">
         <div class="header-w3layouts">
            <!--//navigation section -->
            <div class="headr-title text-center">
               <h1><a class="navbar-brand" href="{{url('/')}}"><span class="fab fa-servicestack"></span>{{ config('app.name', 'Laravel') }}</a></h1>
               <div class="clearfix"></div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse  nav-fill " id="navbarSupportedContent">
                  @guest
                  @else
                  @if (auth()->user()->hasroles(['graduado']))
                  <ul class="navbar-nav nav-pills nav-fill">
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('infopersonal.index') }}">Informacion Personal <span class="sr-only">(current)</span></a>
                     </li>

                     <li class="nav-item">
                        <a href="{{ route('infoacademica.index') }}" class="nav-link ">Registro Académico</a>
                     </li>
                     <li class="nav-item">
                        <a href="{{ route('infolaboral.index') }}" class="nav-link ">Registro Laboral</a>
                     </li>
                     <li class="nav-item">
                        <a href="{{ route('solicitudes.create') }}"class="nav-link">PQR</a>
                     </li>                     
                  </ul>
                  @endif
                  @endguest
                  @guest
                   <ul class="navbar-nav nav-pills nav-fill">
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Inicio<span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="https://www.ucundinamarca.edu.co/" class="nav-link ">Pagina UDEC</a>
                     </li>
                     <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link ">Iniciar Sesion</a>
                     </li>
                     <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link ">Registrarse</a>
                     </li>

                  @else
                  <ul class="navbar-nav nav-pills nav-fill">
                      <li class="nav-item">
                        <a href="{{ route('notificaciones.index') }}" class="nav-link ">   Notificaciones   
                            @if($count = Auth::user()->unreadNotifications->count())
                                <span class="label label-danger pull-10">  {{ $count }}</span>
                            @endif
                        </a>
                     </li>                
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                               </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                 </form>
                        </div>
                     </li>
                  </ul>
                  @endguest
               </div>
            </nav>
         </div>
         <!-- //Navigation -->
         <!-- Slideshow 4 -->
         <div class="slider">
            <div class="callbacks_container">
               <ul class="rslides" id="slider4">
                  <li>
                     <div class="slider-img three-img">
                        <div class="container">
                           <div class="slider-info ">
                              <div class="upper-info text-left">
                                 <h5>GRADUADOS ADMINISTRACIÓN DE EMPRESAS</h5>
                                 <div class="bottom-info">
                                    <h4>Udec Extensión Facatativá</h4>
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img one-img">
                        <div class="container">
                           <div class="slider-info ">
                              <div class="upper-info text-left">
                                 <h5>UDEC SIEMPRE CONTIGO</h5>
                                 <div class="bottom-info">
                                    <h4>Registrate</h4>
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img two-img">
                        <div class="container">
                           <div class="slider-info">
                              <div class="upper-info text-left">
                                 <h5>LAS OPORTUNIDADES TE ESPERAN</h5>
                                 <div class="bottom-info">
                                    <h4>
                                       Comparte tu hoja de vida
                                    </h4>
                                 </div>
                              </div>
                             
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <!-- This is here just to demonstrate the callbacks -->
            <!-- <ul class="events">
               <li>Example 4 callback events</li>
               </ul>-->
            <div class="clearfix"></div>
         </div>
      </div>
      <!-- //banner -->
      <div class="modal fade bd-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="myModal2">
         <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">      
     <iframe width="560" height="315" src="https://www.youtube.com/embed/Pjo81vYv0EY?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
</div>
      <!--services-->
      <section class="service py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">Servicios</h3>
            <div class="row agile-service-grids-all">
               <div class="col-lg-4 w3layouts-service-list">
                  <div class="row white-shadow rounded p-lg-4 p-md-4 p-sm-3 p-3 mb-3 clr-one">
                     <div class="col-md-3 col-sm-3 white-left">
                        <span class="fas fa-lightbulb banner-icon"></span>
                     </div>
                     <div class="col-md-9 col-sm-9 white-right">
                        <h4>Servicio 1</h4>
                        <p>Ingresa tu información personal.</p>
                     </div>
                  </div>
                  <div class="row white-shadow rounded p-lg-4 p-md-4 p-sm-3 p-3 mb-3 clr-two">
                     <div class="col-md-3 col-sm-3 white-left">
                        <span class="fas fa-chart-pie banner-icon"></span>
                     </div>
                     <div class="col-md-9 col-sm-9 white-right">
                        <h4>Servicio 2</h4>
                        <p>Ingresa tu progreso académico y experencia laboral.</p>
                     </div>
                  </div>
                  <div class="row white-shadow rounded p-lg-4 p-md-4 p-sm-3 p-3 clr-three">
                     <div class="col-md-3 col-sm-3 white-left">
                        <span class="fab fa-slideshare banner-icon"></span>
                     </div>
                     <div class="col-md-9 col-sm-9 white-right">
                        <h4>Servicio 3</h4>
                        <p>Realiza solicitudes, peticiones, quejas y reclamos al programa</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4  w3layouts-service-list">
                  <div class="white-pie-chart ">
                     <!-- pie-chart -->
                     <div class="area-grids">
                        <div class="area-grids-heading">
                        </div>
                        <div id="graph4"></div>
                     </div>
                     <!-- //pie-chart -->
                  </div>
               </div>
               <div class="col-lg-4  w3layouts-service-list">
                  <div class="row white-shadow rounded p-lg-4 p-md-4 p-sm-3 p-3 mb-3 clr-four">
                     <div class="col-md-3 col-sm-3 white-left">
                        <span class="fas fa-chart-line banner-icon"></span>
                     </div>
                     <div class="col-md-9 col-sm-9 white-right">
                        <h4>Servicio 4</h4>
                        <p>Las empresas veran hoja de vida y perfiles segun lo requieran.</p>
                     </div>
                  </div>
                  <div class="row white-shadow rounded p-lg-4 p-md-4 p-sm-3 p-3 mb-3 clr-five">
                     <div class="col-md-3 col-sm-3 white-left">
                        <span class="fab fa-cloudscale banner-icon"></span>
                     </div>
                     <div class="col-md-9 col-sm-9 white-right">
                        <h4>Servicio 5</h4>
                        <p>Publicación de noticias del programa y respuesta a solicitudes realizadas</p>
                     </div>
                  </div>
                  <div class="row white-shadow rounded p-lg-4 p-md-4 p-sm-3 p-3 clr-six">
                     <div class="col-md-3 col-sm-3 white-left">
                        <span class="fas fa-users banner-icon"></span>
                     </div>
                     <div class="col-md-9 col-sm-9 white-right">
                        <h4>Servicio 6</h4>
                        <p>Innovación en bolsa de empleo, la empresa te contacta de acuerdo a su necesidad y a tu perfil.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--latest newa-->
     
      <!--latest news-->
      <!--//services-->
      
      <!--Footer -->
      <section class="buttom-footer py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            
            <div class="pt-lg-5 pt-md-5 pt-sm-4 pt-3">
               <div class="row footer-agile-grids ">
                  <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
                     <h4></h4>
                     <nav class="border-line">
                        <ul class="nav flex-column">
                           @guest
                           @else
                           @if (auth()->user()->hasroles(['graduado']))
                           <ul class="navbar-nav nav-pills nav-fill">
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('infopersonal.index') }}">Informacion Personal <span class="sr-only">(current)</span></a>
                              </li>

                              <li class="nav-item">
                                 <a href="{{ route('infoacademica.index') }}" class="nav-link ">Registro Académico</a>
                              </li>
                              <li class="nav-item">
                                 <a href="{{ route('infolaboral.index') }}" class="nav-link ">Registro Laboral</a>
                              </li>
                              <li class="nav-item">
                                 <a href="{{ route('solicitudes.create') }}"class="nav-link">Solicitudes o Peticiones</a>
                              </li>                     
                        </ul>
                  @endif
                  @endguest
                        </ul>
                        <ul class="nav flex-column">
                  @guest
                            <ul class="navbar-nav nav-pills nav-fill">
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/') }}">Inicio<span class="sr-only">(current)</span></a>
                              </li>

                              <li class="nav-item">
                                 <a href="{{ route('login') }}" class="nav-link ">Iniciar Sesion</a>
                              </li>
                              <li class="nav-item">
                                 <a href="{{ route('register') }}" class="nav-link ">Registrarse</a>
                              </li>
                           </ul>
                   @endguest  
                        </ul>         
                     </nav>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
                     <h4>Contactenos</h4>
                     <div class="addres-up">
                        <ul>
                           <li  class="d-flex pb-md-3 pb-3">
                              <span class="fas fa-map-marker-alt d-flex"></span>
                              <p class="d-flex">Calle 14 con avenida 15</p>
                           </li>
                           <li class="d-flex pb-md-3 pb-3">
                              <span class="fas fa-phone-volume d-flex" aria-hidden="true"></span>
                              <p class="d-flex">892-0706</p>
                           </li>
                           <li  class="d-flex pb-md-3 pb-3">
                              <span class="far fa-envelope d-flex"></span>
                              <p class="d-flex"><a href="mailto:info@example.com">admonempresasfacatativa@gmail.com</a></p>
                           </li>
                           <li class="d-flex pb-md-3 pb-3">
                              <span class="fas fa-fax d-flex"></span>
                              <p class="d-flex">892-0707</p>
                           </li>
                           <li  class="d-flex">
                              <span class="fab fa-windows d-flex" aria-hidden="true"></span>
                              <p class="d-flex">http//crmgraduadosadmonfaca.com.co</p>
                           </li>
                        </ul>
                     </div>
                     <div class="icons mt-4">
                       
                     </div>
                  </div>
                  <div class="wthree-left-right col-lg-4 col-md-4 col-sm-12">
                     <h4 class="pb-lg-3 pb-3"></h4>
                     <div class="footer-post d-flex mb-2">
                        <div class="agileinfo_footer_grid1 mr-2">
                           <a href="">
                           <img src="../img/logo.png" alt=" " class="img-fluid">
                           </a>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer>
         <p>©2018 Universidad Cundinamarca | Administracion Empresas Extension Facatativa <a target="_blank">CRM-UDEC</a></p>
      </footer>
      <!-- //Footer -->
      <!--js working-->
      
      <!-- //bootstrap working-->
       <!-- //Footer -->
      <!--js working-->
      <script src='cssGraduado/js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!--responsiveslides banner-->
      <script src="cssGraduado/js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
               auto: true,
               pager:true,
               nav: false,
               speed: 900,
               namespace: "callbacks",
               before: function () {
                  $('.events').append("<li>before event fired.</li>");
               },
               after: function () {
                  $('.events').append("<li>after event fired.</li>");
               }
            });
         
         });
      </script>
      <!--// responsiveslides banner-->     
      <!--About OnScroll-Number-Increase-JavaScript -->
      <script src="cssGraduado/js/jquery.waypoints.min.js"></script>
      <script src="cssGraduado/js/jquery.countup.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->
      <!--FlexSlider-JavaScript -->
      <script defer src="cssGraduado/js/jquery.flexslider.js"></script>
       <script type="text/javascript">
       $(document).ready(function () {
        $("#myModal2").modal()
    });
       
    </script>
      <script>
         $(window).load(function(){
         $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
               $('body').removeClass('loading');
            }
         });
         });
      </script>
      <!-- //FlexSlider-JavaScript -->
      <!--About Chart-JavaScript -->
      <script>
         var label = document.querySelector(".label");
         var c = document.getElementById("c");
         var ctx = c.getContext("2d");
         var cw = c.width =500;
         var ch = c.height = 350;
         var cx = cw / 2,
           cy = ch / 2;
         var rad = Math.PI / 180;
         var frames = 0;
         
         ctx.lineWidth = 1;
         ctx.strokeStyle = "#999";
         ctx.fillStyle = "#ccc";
         ctx.font = "14px monospace";
         
         var grd = ctx.createLinearGradient(0, 0, 0, cy);
         grd.addColorStop(0, "hsla(167,72%,60%,1)");
         grd.addColorStop(1, "hsla(167,72%,60%,0)");
         
         var oData = {
           "2008": 10,
           "2009": 39.9,
           "2010": 17,
           "2011": 30.0,
           "2012": 5.3,
           "2013": 38.4,
           "2014": 15.7,
           "2015": 9.0
         };
         
         var valuesRy = [];
         var propsRy = [];
         for (var prop in oData) {
         
           valuesRy.push(oData[prop]);
           propsRy.push(prop);
         }
         
         
         var vData = 4;
         var hData = valuesRy.length;
         var offset = 50.5; //offset chart axis
         var chartHeight = ch - 2 * offset;
         var chartWidth = cw - 2 * offset;
         var t = 1 / 7; // curvature : 0 = no curvature 
         var speed = 2; // for the animation
         
         var A = {
           x: offset,
           y: offset
         }
         var B = {
           x: offset,
           y: offset + chartHeight
         }
         var C = {
           x: offset + chartWidth,
           y: offset + chartHeight
         }
         
         /*
               A  ^
                |  |  
                + 25
                |
                |
                |
                + 25  
               |__|_________________________________  C
               B
         */
         
         // CHART AXIS -------------------------
         ctx.beginPath();
         ctx.moveTo(A.x, A.y);
         ctx.lineTo(B.x, B.y);
         ctx.lineTo(C.x, C.y);
         ctx.stroke();
         
         // vertical ( A - B )
         var aStep = (chartHeight - 50) / (vData);
         
         var Max = Math.ceil(arrayMax(valuesRy) / 10) * 10;
         var Min = Math.floor(arrayMin(valuesRy) / 10) * 10;
         var aStepValue = (Max - Min) / (vData);
         console.log("aStepValue: " + aStepValue); //8 units
         var verticalUnit = aStep / aStepValue;
         
         var a = [];
         ctx.textAlign = "right";
         ctx.textBaseline = "middle";
         for (var i = 0; i <= vData; i++) {
         
           if (i == 0) {
             a[i] = {
               x: A.x,
               y: A.y + 20,
               val: Max
             }
           } else {
             a[i] = {}
             a[i].x = a[i - 1].x;
             a[i].y = a[i - 1].y + aStep;
             a[i].val = a[i - 1].val - aStepValue;
           }
           drawCoords(a[i], 3, 0);
         }
         
         //horizontal ( B - C )
         var b = [];
         ctx.textAlign = "center";
         ctx.textBaseline = "hanging";
         var bStep = chartWidth / (hData + 1);
         
         for (var i = 0; i < hData; i++) {
           if (i == 0) {
             b[i] = {
               x: B.x + bStep,
               y: B.y,
               val: propsRy[0]
             };
           } else {
             b[i] = {}
             b[i].x = b[i - 1].x + bStep;
             b[i].y = b[i - 1].y;
             b[i].val = propsRy[i]
           }
           drawCoords(b[i], 0, 3)
         }
         
         function drawCoords(o, offX, offY) {
           ctx.beginPath();
           ctx.moveTo(o.x - offX, o.y - offY);
           ctx.lineTo(o.x + offX, o.y + offY);
           ctx.stroke();
         
           ctx.fillText(o.val, o.x - 2 * offX, o.y + 2 * offY);
         }
         //----------------------------------------------------------
         
         // DATA
         var oDots = [];
         var oFlat = [];
         var i = 0;
         
         for (var prop in oData) {
           oDots[i] = {}
           oFlat[i] = {}
         
           oDots[i].x = b[i].x;
           oFlat[i].x = b[i].x;
         
           oDots[i].y = b[i].y - oData[prop] * verticalUnit - 20;
           oFlat[i].y = b[i].y - 25;
         
           oDots[i].val = oData[b[i].val];
           
           i++
         }
         ///// Animation Chart ///////////////////////////
         //var speed = 3;
         function animateChart() {
           requestId = window.requestAnimationFrame(animateChart);
           frames += speed; //console.log(frames)
           ctx.clearRect(60, 0, cw, ch - 60);
           
           for (var i = 0; i < oFlat.length; i++) {
             if (oFlat[i].y > oDots[i].y) {
               oFlat[i].y -= speed;
             }
           }
           drawCurve(oFlat);
           for (var i = 0; i < oFlat.length; i++) {
               ctx.fillText(oDots[i].val, oFlat[i].x, oFlat[i].y - 25);
               ctx.beginPath();
               ctx.arc(oFlat[i].x, oFlat[i].y, 3, 0, 2 * Math.PI);
               ctx.fill();
             }
         
           if (frames >= Max * verticalUnit) {
             window.cancelAnimationFrame(requestId);
             
           }
         }
         requestId = window.requestAnimationFrame(animateChart);
         
         /////// EVENTS //////////////////////
         c.addEventListener("mousemove", function(e) {
           label.innerHTML = "";
           label.style.display = "none";
           this.style.cursor = "default";
         
           var m = oMousePos(this, e);
           for (var i = 0; i < oDots.length; i++) {
         
             output(m, i);
           }
         
         }, false);
         
         function output(m, i) {
           ctx.beginPath();
           ctx.arc(oDots[i].x, oDots[i].y, 20, 0, 2 * Math.PI);
           if (ctx.isPointInPath(m.x, m.y)) {
             //console.log(i);
             label.style.display = "block";
             label.style.top = (m.y + 10) + "px";
             label.style.left = (m.x + 10) + "px";
             label.innerHTML = "<strong>" + propsRy[i] + "</strong>: " + valuesRy[i] + "%";
             c.style.cursor = "pointer";
           }
         }
         
         // CURVATURE
         function controlPoints(p) {
           // given the points array p calculate the control points
           var pc = [];
           for (var i = 1; i < p.length - 1; i++) {
             var dx = p[i - 1].x - p[i + 1].x; // difference x
             var dy = p[i - 1].y - p[i + 1].y; // difference y
             // the first control point
             var x1 = p[i].x - dx * t;
             var y1 = p[i].y - dy * t;
             var o1 = {
               x: x1,
               y: y1
             };
         
             // the second control point
             var x2 = p[i].x + dx * t;
             var y2 = p[i].y + dy * t;
             var o2 = {
               x: x2,
               y: y2
             };
         
             // building the control points array
             pc[i] = [];
             pc[i].push(o1);
             pc[i].push(o2);
           }
           return pc;
         }
         
         function drawCurve(p) {
         
           var pc = controlPoints(p); // the control points array
         
           ctx.beginPath();
           //ctx.moveTo(p[0].x, B.y- 25);
           ctx.lineTo(p[0].x, p[0].y);
           // the first & the last curve are quadratic Bezier
           // because I'm using push(), pc[i][1] comes before pc[i][0]
           ctx.quadraticCurveTo(pc[1][1].x, pc[1][1].y, p[1].x, p[1].y);
         
           if (p.length > 2) {
             // central curves are cubic Bezier
             for (var i = 1; i < p.length - 2; i++) {
               ctx.bezierCurveTo(pc[i][0].x, pc[i][0].y, pc[i + 1][1].x, pc[i + 1][1].y, p[i + 1].x, p[i + 1].y);
             }
             // the first & the last curve are quadratic Bezier
             var n = p.length - 1;
             ctx.quadraticCurveTo(pc[n - 1][0].x, pc[n - 1][0].y, p[n].x, p[n].y);
           }
         
           //ctx.lineTo(p[p.length-1].x, B.y- 25);
           ctx.stroke();
           ctx.save();
           ctx.fillStyle = grd;
           ctx.fill();
           ctx.restore();
         }
         
         function arrayMax(array) {
           return Math.max.apply(Math, array);
         };
         
         function arrayMin(array) {
           return Math.min.apply(Math, array);
         };
         
         function oMousePos(canvas, evt) {
           var ClientRect = canvas.getBoundingClientRect();
           return { //objeto
             x: Math.round(evt.clientX - ClientRect.left),
             y: Math.round(evt.clientY - ClientRect.top)
           }
         }
      </script>
      <!-- //Chart-JavaScript -->
      <!--service pie-charts -->
      <script src="cssGraduado/js/raphael-min.js"></script>
      <script src="cssGraduado/js/morris.js"></script>
      <script>
         Morris.Donut({
           element: 'graph4',
           data: [
           {value: 20, label: 'Mantente Informado', formatted: '' },
            {value: 50, label: 'Registros', formatted: '' },
            {value: 10, label: 'Empresas', formatted: '' },
            {value: 10, label: 'Administracion', formatted: '' },
            {value: 10, label: 'Solicitudes', formatted: '' }
           ],
           formatter: function (x, data) { return data.formatted; }
         });
      </script>
      <!-- //charts -->
      <!-- //pie-Chart-JavaScript -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
               event.preventDefault();
               $('html,body').animate({
                  scrollTop: $(this.hash).offset().top
               }, 900);
            });
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
            var defaults = {
               containerID: 'toTop', // fading element id
               containerHoverID: 'toTopHover', // fading element hover id
               scrollSpeed: 1200,
               easingType: 'linear'
            };
         
         
            $().UItoTop({
               easingType: 'easeOutQuart'
            });
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="cssGraduado/js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>