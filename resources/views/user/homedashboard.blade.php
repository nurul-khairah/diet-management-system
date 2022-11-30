<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>KlassyDiet</title>
<!--
    

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <link rel="stylesheet" href="assets/css/banner-home.css">

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
                        <a href="{{url('index')}}" class="logo">
                            <img src="assets/images/logoklassyy.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            
                           	
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
                            <li class="scroll-to-section"><a href="{{url('about')}}">About</a></li>
                            <li class="scroll-to-section"><a href="{{url('auth.login')}}">Login</a></li>
                            <li class="scroll-to-section"><a href="{{url('auth.register')}}">Register</a></li>
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
    <!-- ***** Header Area End ***** -->
    <section class="banner-home">
<!-- Banner section Start-->

       <!-- container Start-->
        <div class="container-fluid">
           <!--Row Start-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                <h1> Welcome to KlassyDiet</h1>
                <h2>The healthy food for beginners</h2>
                <h4>“Healthy does NOT mean starving yourself EVER. Healthy means eating the right food in the right amount”. – Karen Salmansohn</span></h4>
                <a class="btn btn-success" href="{{url('auth.login')}}" role="button">Check our food</a>
                </div>
            </div>
           <!--Row Ended-->
        </div>
       <!-- container Ended-->
</section>

    <footer>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="{{url('index')}}"><img src="assets/images/logoklassyy.png" alt=""></a>
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
  </body>
</html>