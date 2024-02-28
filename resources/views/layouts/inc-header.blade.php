 <!-- HEADER -->
 <header id="header" class="header-v3 clearfix">

    <!-- HEADER TOP -->
    <div class="header_top">
        <div class="container">
            <div class="header_left float-left">
                <span><i class="lotus-icon-location"></i> @if(session()->get('locale') == 'en')
                    {{ get_address_en() }}
                    @else
                    {{ get_address() }}
                    @endif</span>
                <span><i class="lotus-icon-phone"></i> <a href="tel:{{ get_phone() }}">{{ get_phone() }}</a></span>
            </div>

            <div class="header_right float-right">
                <span class="envelope-to">
                    <i class="fa fa-envelope-o "></i> <a href="mailto:{{ get_email() }}">{{ get_email() }}</a>
                </span>
                <span class="socials">
                    <a href="https://www.facebook.com/Villamaliekohsamui"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/@VillaMalieSamui/featured"><i class="fa fa-youtube"></i></a>
                            <a href="https://www.instagram.com/villa_malie_samui/?fbclid=IwAR2vWANsMqSFN7dOMdT4R4xRBcb1Q6lVHoZF5jnwEpJsrVmZWKRWFyRJXAE"><i class="fa fa-instagram"></i></a>
                </span>
                <div class="dropdown language">
                    <span>
                        @if(session()->get('locale') == 'en')
                        ENG
                        @else
                        THAI
                        @endif
                    </span>
                    <ul>
                        <li class="{{ session()->get('locale') == 'en' ? 'active' : '' }}"><a href="{{ url('/lang/change?lang=en') }}">ENG</a></li>
                        <li class="{{ session()->get('locale') == 'th' ? 'active' : '' }}"><a href="{{ url('/lang/change?lang=th') }}">TH</a></li>
                    </ul>
                </div>
                
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
                <a href="{{ url('/') }}"><img src="{{ url('home/images/logo-header.png') }}" alt=""></a>
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