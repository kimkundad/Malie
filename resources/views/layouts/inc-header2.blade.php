<!-- HEADER -->
<header id="header">
            
    <!-- HEADER TOP -->
    <div class="header_top">
        <div class="container">

            <div class="header_left float-left">
                <span><i class="lotus-icon-location"></i> 
                
                    @if(session()->get('locale') == 'en')
                    {{ get_address_en() }}
                    @else
                    {{ get_address() }}
                    @endif
                </span>
                <span><i class="lotus-icon-phone"></i> <a href="tel:{{ get_phone() }}">{{ get_phone() }}</a></span>
                <span><i class="fa fa-envelope-o "></i> <a href="mailto:{{ get_email() }}">{{ get_email() }}</a></span>
            </div>

            <div class="header_right float-right">
                
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
        </div>
    </div>
    <!-- END / HEADER TOP -->
    
    <!-- HEADER LOGO & MENU -->
    <div class="header_content" id="header_content">

        <div class="container">
            <!-- HEADER LOGO -->
            <div class="header_logo">
                <a href="{{ url('/') }}"><img src="{{ url('home/images/logo-header-MALIE.png') }}" alt="logo website"></a>
            </div>
            <!-- END / HEADER LOGO -->
            
            <!-- HEADER MENU -->
            <nav class="header_menu">
                <ul class="menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ (request()->is('about')) ? 'current-menu-item' : '' }}" ><a href="{{ url('/about') }}">About</a></li>
                    <li class="{{ (request()->is('room')) ? 'current-menu-item' : '' }}"><a href="{{ url('/room') }}">Room</a></li>
                    <li class="{{ (request()->is('reservation')) ? 'current-menu-item' : '' }}"><a href="{{ url('/reservation') }}">Reservation</a></li>
                    <li class="{{ (request()->is('gallery')) ? 'current-menu-item' : '' }}"><a href="{{ url('/gallery') }}">Gallery</a></li>
                    <li class="{{ (request()->is('blog')) ? 'current-menu-item' : '' }}"><a href="{{ url('/blog') }}">Blog</a></li>
                    <li class="{{ (request()->is('contact')) ? 'current-menu-item' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
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