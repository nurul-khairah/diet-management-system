<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KlassyDiet</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <link rel="stylesheet" href="assets/css/banner-home.css">


    <![endif]--> 
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('user.dashboard')}}" class="logo">
                            <img src="assets/images/logoklassyy.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('user.dashboard')}}" class="active">Home</a></li>
                            
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="{{url('bmicalc')}}">BMI Calculator</a></li>
                            <li class="scroll-to-section"><a href="{{url('bmrcalc')}}">Calorie Calculator</a></li>
                            <li class="submenu">
                                <a href="javascript:;">My Meal Plan</a>
                                <ul>
                                    <li><a href="{{url('1200calories')}}">1200 Calories</a></li>
                                    <li><a href="{{url('1500calories')}}">1500 Calories</a></li>
                                    <li><a href="{{url('1800calories')}}">1800 Calories</a></li>
                                    <li><a href="{{url('2000calories')}}">2000 Calories</a></li>
                                    
                                </ul> 
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            
                            <li class="scroll-to-section"><a href="{{url('auth.logout')}}">Logout</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
<br><br><br><br><br><br>

<div class="container">
    <div class="row">
        <div class="col-xs-12\">
            <form action="{{ url('bmicalculation') }}" method="GET" >
                @csrf 
                <h1>Calculate your BMI</h1>

                @if(session('$bmi'))
                    <div class="alert alert-message">
                        Your BMI is: {{ $bmi }}
                        {{ Session::get($bmi) }}
                    </div>
                @endif

                @csrf
                
                <div class="form-group row" >
                <label>Wight in kg</label>
                    <input type="number" class="form-control" name="weight" placeholder="Weight in kg" required>
                </div>
                
                <div class="form-group row">
                <label>Height in meter</label>
                    <input type="text" class="form-control" name="height" placeholder="Height in meter" required>
                </div>
                <center><input type="submit" name="btn" class="btn btn-warning btn-lg font-weight-bold" value="Calculate"><center>
                
            </form> 
            <br>
            <div class="col-xs-4">
                 <img src="assets/images/bmichart.png" alt="bmichart">
            </div>
        </div>
    </div>

</div>

<!-- <br><br>
<div class="col-xs-4">
        <img src="assets/images/bmichart.png" alt="bmichart">
</div>

<center><img src="assets/images/bmichart.png" alt="bmichart" ></center>         -->

<br><br><br>
          <div class="row text-center">
              <div class="col-md-4 m-auto">  
              </div>
              <div class="col-md-6 m-auto">
                  @if(session('message'))
                  <div class="alert alert-message">
                      {{ session('message') }}
                  </div>
                  @endif
              </div>
          </div>


<!-- /.container -->

<!-- ***** Footer Start ***** -->
<footer>
        
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4 col-xs-12">
                    <div class="logo">
                        <a href="{{url('user.dashboard')}}"><img src="assets/images/logoklassyy.png" alt=""></a>
                    </div>
                </div>
                
                
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Klassy Diet Co.
                    </div>
                </div>
            
        </div>
        
</footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->




</body>
</html>