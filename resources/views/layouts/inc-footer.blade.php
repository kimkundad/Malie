<!-- FOOTER -->
<footer id="footer">

    <!-- FOOTER TOP -->
    <div class="footer_top">
        <div class="container">
            <div class="row">

                <!-- WIDGET MAILCHIMP -->
                <div class="col-lg-9">
                    <div class="mailchimp">
                        <h4>News &amp; Offers</h4>
                        <div class="mailchimp-form">
                            <form id="subscribeForm">
                                <input type="text" name="email" id="subscribeForm_email" placeholder="Your email address" class="input-text">
                                <button id="get_subscribe" class="awe-btn">SIGN UP</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END / WIDGET MAILCHIMP -->
                
                <!-- WIDGET SOCIAL -->
                <div class="col-lg-3">
                    <div class="social">
                        <div class="social-content">
                            <a href="https://www.facebook.com/Villamaliekohsamui"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/@VillaMalieSamui/featured"><i class="fa fa-youtube"></i></a>
                            <a href="https://www.instagram.com/villa_malie_samui/?fbclid=IwAR2vWANsMqSFN7dOMdT4R4xRBcb1Q6lVHoZF5jnwEpJsrVmZWKRWFyRJXAE"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- END / WIDGET SOCIAL -->

            </div>
        </div>
    </div>
    <!-- END / FOOTER TOP -->

    <!-- FOOTER CENTER -->
    <div class="footer_center">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-lg-5">
                    <div class="widget widget_logo">
                        <div class="widget-logo">
                            <div class="img">
                                <a href="#"><img src="{{ url('home/images/logo-footer_v2.png') }}" alt="logo website"></a>
                            </div>
                            <div class="text">
                                <p><i class="lotus-icon-location"></i> @if(session()->get('locale') == 'en')
                                    {{ get_address_en() }}
                                    @else
                                    {{ get_address() }}
                                    @endif</p>
                                <p><i class="lotus-icon-phone"></i> <a href="tel:{{ get_phone() }}">{{ get_phone() }}</a></p>
                                <p><i class="fa fa-envelope-o"></i> <a href="mailto:{{ get_email() }}">{{ get_email() }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">Page site</h4>
                        <ul>
                            <li><a href="{{ url('/room') }}">Room</a></li>
                            <li><a href="{{ url('/reservation') }}">Reservation</a></li>
                            <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                            @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">เข้าสู่ระบบ / Login</a></li>
                            @else
                            @if(Auth::user()->roles[0]->name == 'superadmin' || Auth::user()->roles[0]->name == 'admin')
                            <li><a href="{{ url('/admin/dashboard') }}">เข้าสู่หลังบ้าน</a></li>
                            @endif
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="col-xs-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">ABOUT</h4>
                        <ul>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            <li><a href="">Comming Soon</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-4 col-lg-3">
                    <div class="widget widget_tripadvisor">
                        <h4 class="widget-title">Help</h4>
                        <ul>
                            <li><a href="{{ url('/term_condition') }}">Term and condition</a></li>
                            <li><a href="{{ url('/policy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- END / FOOTER CENTER -->

    <!-- FOOTER BOTTOM -->
    <div class="footer_bottom">
        <div class="container">
            <p>&copy; 2024 Villa Malie Koh Samui All rights reserved.</p>
        </div>
    </div>
    <!-- END / FOOTER BOTTOM -->

</footer>
<!-- END / FOOTER -->