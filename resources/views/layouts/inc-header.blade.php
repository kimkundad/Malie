 <!-- HEADER -->
 <header id="header" class="header-v3 clearfix">

    <!-- HEADER TOP -->
    <div class="header_top">
        <div class="container">
            <div class="header_left float-left">
                <span><i class="lotus-icon-cloud"></i> 18 °C</span>
                <span><i class="lotus-icon-location"></i> 225 Beach Street, Australian</span>
                <span><i class="lotus-icon-phone"></i> 1-548-854-8898</span>
            </div>

            <div class="header_right float-right">
                <span class="envelope-to">
                    <i class="fa fa-envelope-o "></i> kim.kundad@gmail.com
                </span>
                <span class="socials">
                    <a href="!#"><i class="fa fa-facebook"></i></a>
                    <a href="!#"><i class="fa fa-twitter"></i></a>
                    <a href="!#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="!#"><i class="fa fa-youtube"></i></a>
                </span>
                
                
            </div>
            <!-- HEADER LOGO -->
            <a class="logo-top img-responsive" href="#"><img src="{{ url('home/images/logo-header.png') }}" alt=""></a>
            <!-- END / HEADER LOGO -->

        </div>
    </div>
    <!-- END / HEADER TOP -->

    <!-- HEADER LOGO & MENU -->
    <div class="header_content" id="header_content">

        <div class="container">

            <!-- HEADER LOGO -->
            <div class="header_logo">
                <a href="#"><img src="{{ url('home/images/logo-header.png') }}" alt=""></a>
            </div>
            <!-- END / HEADER LOGO -->
            <!-- HEADER MENU -->
            <nav class="header_menu">
                <ul class="menu">
                    <li class="current-menu-item">
                        <a href="{{ url('/') }}">Home </a>
                    </li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/room') }}">Room</a></li>
                    <li><a href="{{ url('/reservation') }}">Reservation</a></li>
                    <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </nav>
            <!-- END / HEADER MENU -->

            <!-- MENU BAR -->
            <span class="menu-bars">
                    <span></span>
                </span>
            <!-- END / MENU BAR -->

        </div>
    </div>
    <!-- END / HEADER LOGO & MENU -->

</header>
<!-- END / HEADER -->