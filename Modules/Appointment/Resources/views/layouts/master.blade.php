<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>@yield('title')</title>

<!-- Fav Icon -->
<link rel="icon" href="{{ Module::asset('home:images/favicon.ico') }}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
<!-- Stylesheets -->
<link href="{{ Module::asset('home:css/font-awesome-all.css') }}">
<link href="{{ Module::asset('home:css/font-awesome-all.css') }}" rel="stylesheet">
<link href="{{ Module::asset('home:css/flaticon.css') }}" rel="stylesheet">
<link href="{{ Module::asset('home:css/owl.css') }}" rel="stylesheet">
<link href="{{ Module::asset('home:css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ Module::asset('home:css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ Module::asset('home:css/animate.css') }}" rel="stylesheet">
<link href="{{ Module::asset('home:css/color.css') }}" rel="stylesheet">
<link href="{{ Module::asset('home:css/style.css') }}" rel="stylesheet">
<link href="{{ Module::asset('home:css/responsive.css') }}" rel="stylesheet">
    </head>
    <body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader"></div>
         @include('home::layouts.header')
        @yield('content')

      
    <!-- newsletter-section -->
    <section class="newsletter-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box">
                        <h2>Support 24/7</h2>
                        <h3>Hotline <a href="tel:+1 242-322-2861">+1 242-322-2861</a></h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <form action="" method="post" class="newsletter-form">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter Your Email" required="">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-section end -->


    <!-- main-footer -->
    <footer class="main-footer">
        <div class="footer-top">
            <div id="starshine">
                <div class="shine shine-1" style="background-image: url({{ Module::asset('home:images/icons/glitter-1.png') }});"></div>
                <div class="shine shine-2" style="background-image: url({{ Module::asset('home:images/icons/glitter-1.png') }});"></div>
            </div>
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.php"><img src="{{ Module::asset('home:images/footer-logo.png') }}" alt=""></a></figure>
                                <div class="text">
                                    <p>The Princess Margaret Hospital is the premiere tertiary healthcare facility in Nassau City, The Bahamas</p>
                                </div>
                                <div class="social-inner">
                                    <h3>Follow Us:</h3>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.php"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.php"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="index.php"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.php"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-2 col-md-6 col-sm-12 footer-column">&nbsp;</div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>About Us</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="clearfix">
                                        <li><a href="index.php">About Us</a></li>
                                        <li><a href="index.php">Our Team</a></li>
                                        <li><a href="index.php">Covid-19 Testing</a></li>
                                        <li><a href="index.php">Contacts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Usefull Links</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="clearfix">
                                        <li><a href="index.php">Situation Reports</a></li>
                                        <li><a href="index.php">Advice For Public</a></li>
                                        <li><a href="index.php">Prevention</a></li>
                                        <li><a href="index.php">Coronavirus Symptoms</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred">
            <div class="auto-container">
                <div class="copyright"><p>Copyrights 2021 All Rights Reserved.</p></div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>


<!-- jequery plugins -->
<script src="{{ Module::asset('home:js/jquery.js') }}"></script>
<script src="{{ Module::asset('home:js/popper.min.js') }}"></script>
<script src="{{ Module::asset('home:js/bootstrap.min.js') }}"></script>
<script src="{{ Module::asset('home:js/owl.js') }}"></script>
<script src="{{ Module::asset('home:js/wow.js') }}"></script>
<script src="{{ Module::asset('home:js/validation.js') }}"></script>
<script src="{{ Module::asset('home:js/jquery.fancybox.js') }}"></script>
<script src="{{ Module::asset('home:js/appear.js') }}"></script>
<script src="{{ Module::asset('home:js/scrollbar.js') }}"></script>
<script src="{{ Module::asset('home:js/plugins.js') }}"></script>
<script src="{{ Module::asset('home:js/text_animation.js') }}"></script>
<script src="{{ Module::asset('home:js/jquery.nice-select.min.js') }}"></script>

<!-- main-js -->
<script src="{{ Module::asset('home:js/script.js') }} "></script>

</html>
