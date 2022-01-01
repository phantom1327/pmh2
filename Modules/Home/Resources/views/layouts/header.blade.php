<header class="main-header">
        
        <div class="auto-container">
            <div class="header-upper clearfix">
                <div class="outer-box pull-left">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="{{ route('home') }}"><img src="{{ Module::asset('home:images/logo.png') }}" alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-left">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="{{ route('home') }}">home</a></li>
                                    <li class="dropdown"><a href="index.php">Covid-19 Testing</a></li>
                                    <li><a href="#">Prevention</a></li>
                                    <li><a href="{{ route('account') }}">Account</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="menu-right-content pull-right">
                    <div class="btn-box"><a href="{{ route('appointmentform') }}">Make an Appointment</a></div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <div class="outer-box pull-left">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="{{route('home')}}"><img src="{{ Module::asset('home:images/small-logo.png') }}" alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-left">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                </div>
                <div class="menu-right-content pull-right">
                    <div class="btn-box"><a href="{{ route('appointmentform') }}">Make an Appointment</a></div>
                </div>
            </div>
        </div>
    </header>


<div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.php"><img src="{{ Module::asset('home:images/footer-logo.png') }}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Shirley Street, Nassau City, The Bahamas</li>
                    <li><a href="tel:+1 242-322-2861">+1 242-322-2861</a></li>
                    <li><a href="mailto:PMHCommunications@pmh.phabahamas.org">PMHCommunications@pmh.phabahamas.org</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.php"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index.php"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index.php"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index.php"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index.php"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>