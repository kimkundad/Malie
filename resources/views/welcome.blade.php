@extends('layouts.template')

    @section('title')
    ที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Kor Samui)
    @stop

    @section('og')
    
    @stop('og')

    @section('stylesheet')

    @stop('stylesheet')

    @section('content')



    <!-- BANNER SLIDER -->
    <section class="section-slider slider-style-2 clearfix">
        <h1 class="element-invisible">Slider</h1>
        <div id="slider-revolution">
            <ul>
                <li data-transition="fade">
                    <img src="{{ url('home/images/example/out._w.webp') }}" data-bgposition="left center" data-duration="14000"
                         data-bgpositionend="right center" alt="">

                    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240"
                         data-speed="700" data-start="1500" data-easing="easeOutBack">
                        WELCOME TO
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280"
                         data-speed="700" data-easing="easeOutBack" data-start="2000">THE LOTUS HOTEL
                    </div>

                    <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center"
                       data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">VIEW NOW</a>
                </li>

                <li data-transition="fade">
                    <img src="{{ url('home/images/example/out.-2_w.webp') }}" data-bgposition="left center" data-duration="14000"
                         data-bgpositionend="right center" alt="">


                    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                         data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                        EACH HOTEL IS
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption slider-caption-3" data-x="center" data-y="260"
                         data-speed="700" data-easing="easeOutBack" data-start="2000">
                        UNIQUE 60%
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                         data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2200">JUST LIKE YOU
                    </div>

                </li>

                <li data-transition="fade">
                    <img src="{{ url('home/images/example/out.-5_w.webp') }}" data-bgposition="left center" data-duration="14000"
                         data-bgpositionend="right center" alt="">

                    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240"
                         data-speed="700" data-start="1500" data-easing="easeOutBack">
                        WELCOME TO
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280"
                         data-speed="700" data-easing="easeOutBack" data-start="2000">THE LOTUS HOTEL
                    </div>

                    <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center"
                       data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">VIEW NOW</a>
                </li>

            </ul>
        </div>

    </section>
    <!-- END / BANNER SLIDER -->

    <!-- CHECK AVAILABILITY -->
    <section class="section-check-availability">
        <div class="container">
            <div class="check-availability">
                <div class="row">
                    <div class="col-lg-3">
                        <h2>CHECK AVAILABILITY</h2>
                    </div>
                    <div class="col-lg-9">
                        <form id="ajax-form-search-room" action="search_step_2.php" method="post">
                            <div class="availability-form">
                                <input type="text" name="arrive" class="awe-calendar from" placeholder="Arrival Date">
                                <input type="text" name="departure" class="awe-calendar to" placeholder="Departure Date">

                                <select class="awe-select" name="adults">
                                    <option>Adults</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <select class="awe-select" name="children">
                                    <option>Children</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <div class="vailability-submit">
                                    <button class="awe-btn awe-btn-13">FIND THE BEST RATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / CHECK AVAILABILITY -->


    <!-- ABOUT -->
    <section class="section-home-about bg-white">
        <div class="container">
            <div class="home-about">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img">
                            <a href="#"><img src="{{ url('home/images/example/LINE_ALBUM2536.jpg') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text">
                            <h2 class="heading">ABOUT US</h2>
                            <span class="box-border"></span>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                            <a href="#" class="awe-btn awe-btn-default">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / ABOUT -->

    <!-- OUR BEST -->
    <section class="section-our-best bg-white">
        <div class="container">

            <div class="our-best">
                <div class="row">

                    <div class="col-md-6 col-md-push-6">
                        <div class="img">
                            <img src="{{ url('home/images/example/LINE_ALBUM_Star-stay-pattaya_220905_26.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="col-md-6 col-md-pull-6 ">
                        <div class="text">
                            <h2 class="heading">Our Best</h2>
                            <p>One of Catalina Island's best-loved hotels, Hotel Vista Del Mar is recognized as one of Avalon's leading hotels with gracious island hospitality, thoughtful amenities and distinctive .</p>
                            <ul>
                                <li><img src="{{ url('home/images/home/ourbest/icon-3.png') }}" alt="icon">250 Best Rooms  5 Star</li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-2.png') }}" alt="icon">Wet Bar with Refrigerator</li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-4.png') }}" alt="icon">Double Whirlpool Jacuzzi Tub</li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-5.png') }}" alt="icon">Luxurious High Thread Count </li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-1.png') }}" alt="icon">Breakfast each morning</li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-6.png') }}" alt="icon">Ocean Views to lotus Hotel</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- END / OUR BEST -->

    <!-- HOME GUEST BOOK -->
    <div class="section-home-guestbook home-guestbook-style-2 awe-parallax bg-22 mt90 pt100 pb100">
        <div class="container">
            <div class="home-guestbook pt0 pb0">
                <div class="row">
                    <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading mb40 row-20 text-center">
                            <h2>Guest book</h2>
                            <p class="sub">Your feedback means the world to us.</p>
                        </div>
                    </div>
                    <div class="guestbook-content text-center owl-single">
                            <!-- ITEM -->
                            <div class="guestbook-item">
                                <div class="text">
                                    <p class="f20">"This is the only place to stay in Catalina! I have stayed in the
                                        cheaper hotels and they were fine, but this is just the icing on the cake! After
                                        spending the day bike riding and hiking to come back and enjoy a glass of wine
                                        while looking out your ocean view window and then to top it all off"</p>
                                </div>
                                <div class="img">
                                    <img src="{{ url('home/images/avatar/img-15.png') }}" alt="">
                                </div>
                                <div class="info-author">
                                    <span class="f20 c-main"><strong>Rosalind Cloer</strong></span><br>
                                    <span class="f14">Oxford</span>
                                </div>
                            </div>
                            <!-- ITEM -->
                            <!-- ITEM -->
                            <div class="guestbook-item">
                                <div class="text">
                                    <p class="f20">This is the only place to stay in Catalina! I have stayed in the
                                        cheaper hotels and they were fine, but this is just the icing on the cake! After
                                        spending the day bike riding and hiking to come back and enjoy a glass of wine
                                        while looking out your ocean view window and then to top it all off...</p>
                                </div>
                                <div class="img">
                                    <img src="{{ url('home/images/avatar/img-5.jpg') }}" alt="">
                                </div>
                                <div class="info-author">
                                    <span class="f20 c-main"><strong>Seelentag</strong></span><br>
                                    <span class="f14">From Los Angeles, California</span>
                                </div>
                            </div>
                            <!-- ITEM -->
                            <!-- ITEM -->
                            <div class="guestbook-item">
                                <div class="text">
                                    <p class="f20">This is the only place to stay in Catalina! I have stayed in the
                                        cheaper hotels and they were fine, but this is just the icing on the cake! After
                                        spending the day bike riding and hiking to come back and enjoy a glass of wine
                                        while looking out your ocean view window and then to top it all off...</p>
                                </div>
                                <div class="img">
                                    <img src="{{ url('home/images/avatar/img-5.jpg') }}" alt="">
                                </div>
                                <div class="info-author">
                                    <span class="f20 c-main"><strong>Seelentag</strong></span><br>
                                    <span class="f14">From Los Angeles, California</span>
                                </div>
                            </div>
                            <!-- ITEM -->

                        </div>
                </div>

            </div>
        </div>

    </div>
    <!-- END / HOME GUEST BOOK -->

    <!-- DEALS PACKAGE -->
    <section class="section-deals mt100">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading row-20 mb30 text-center">
                            <h2>Deals & PACKAGE</h2>
                        </div>
                    </div>
                </div>
                <div class="row v-align">
                    <div class="col-xs-12 col-sm-6">
                        <div class="img-deals img-hover-box">
                            <div class="img">
                                <img src="{{ url('home/images/example/241_Baanpuck_Cover-Website_BP-835.jpg') }}" alt="" class="img-responsive img-full">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="item item-deal">
                            <div class="img">
                                <img class="img-full" src="{{ url('home/images/home-3/deals/deals-1.png') }}" alt="">
                            </div>
                            <div class="info">
                                <a class="title bold f26 font-monserat upper" href="!#">Spa salon</a>
                                <p class="sub font-monserat f12 f-600 upper mt10 mb20">package</p>
                                <a class="awe-btn awe-btn-12 btn-medium font-hind bold f12" href="!#">Click hear</a>
                            </div>
                        </div>
                        <div class="item item-deal">
                            <div class="img">
                                <img class="img-full" src="{{ url('home/images/home-3/deals/deals-3.png') }}" alt="">
                            </div>
                            <div class="info">
                                <a class="title bold f26 font-monserat upper" href="!#">weeding</a>
                                <p class="sub font-monserat f12 f-600 upper mt10 mb20">event</p>
                                <a class="awe-btn awe-btn-12 btn-medium font-hind bold f12" href="!#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / DEALS PACKAGE -->

    <!-- NEWS -->
    <section class="section-news mt60">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                        <div class="ot-heading row-20 mb40 text-center">
                            <h2>News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="item">
                            <div class="img">
                                <img class="img-responsive img-full" src="{{ url('home/images/example/ADS_97-1024x538.jpg') }}" alt="">
                            </div>
                            <div class="info">
                                <p class="date f20">
                                    21 December, 2017
                                </p>
                                <a class="title font-monserat f20 mb20 block bold upper" href="!#">UPDATE MENU FOOD IN LOTUS
                                    HOTEL</a>
                                <a class="more block f13" href="!#">[Read more]</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="item">
                            <div class="img">
                                <img class="img-responsive img-full" src="{{ url('home/images/example/S__10870798-1024x538.jpg') }}" alt="">
                            </div>
                            <div class="info">
                                <p class="date f20">
                                    06 Octorber, 2017
                                </p>
                                <a class="title font-monserat f20 mb20 block bold upper" href="!#">WEDDING DAY
                                    JONATHA & JESSICA</a>
                                <a class="more block f13" href="!#">[Read more]</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="item">
                            <div class="img">
                                <img class="img-responsive img-full" src="{{ url('home/images/example/5-pool-villa-for-pattaya-1024x499.jpg') }}" alt="">
                            </div>
                            <div class="info">
                                <p class="date f20">
                                    18 March, 2017
                                </p>
                                <a class="title font-monserat f20 mb20 block bold upper" href="!#">Bryce Canyon A Stunning Us
                                    Travel Destination</a>
                                <a class="more block f13" href="!#">[Read more]</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="!#" class="awe-btn awe-btn-default font-hind f12 bold btn-medium mt15">View more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END / NEWS -->

    <!-- GALLERY -->
    <section class="section-gallery bg-white">
            
        <div class="gallery  no-padding">
            <h2 class="heading text-center">GALLERY</h2>
            
            <!-- FILTER -->
            <div class="gallery-cat text-center">
                <ul class="list-inline">
                    <li class="active"><a href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".ground">HOTEL &amp; GROUND</a></li>
                    <li><a href="#" data-filter=".suite">ROOM/SUITE </a></li>
                    <li><a href="#" data-filter=".bathroom">BATHROOM</a></li>
                    <li><a href="#" data-filter=".dining">DINING</a></li>
                </ul>
            </div>
            <!-- END / FILTER -->

            <!-- GALLERY CONTENT -->
            <div class="gallery-content hover-img">
                <div class="row">
                    <div class="gallery-isotope col-6 pd-0">

                        <!-- ITEM SIZE -->
                            <div class="item-size"></div>
                            <!-- END / ITEM SIZE -->
                        <!-- ITEM -->
                        
                        <div class="item-isotope suite dining ">
                            <div class="gallery_item">
                                <a  href="{{ url('home/images/gallery/popup/img-1.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                    <img src="{{ url('home/images/gallery/img-1.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  ground bathroom suite">
                            <div class="gallery_item">
                                <a  href="{{ url('home/images/gallery/popup/img-2.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                    <img src="{{ url('home/images/gallery/img-2.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ground bathroom dining">
                            <div class="gallery_item">
                                <a  href="{{ url('home/images/gallery/popup/img-3.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                    <img src="{{ url('home/images/gallery/img-3.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope suite dining">
                            <div class="gallery_item">
                                <a  href="{{ url('home/images/gallery/popup/img-4.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                    <img src="{{ url('home/images/gallery/img-4.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  ground suite dining">
                            <div class="gallery_item">
                                <a  href="{{ url('home/images/gallery/popup/img-5.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                    <img src="{{ url('home/images/gallery/img-5.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ground bathroom dining">
                            <div class="gallery_item">
                                <a  href="{{ url('home/images/gallery/popup/img-6.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                    <img src="{{ url('home/images/gallery/img-6.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ground suite dining">
                            <div class="gallery_item">
                                <a  href="{{ url('home/images/gallery/popup/img-7.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                    <img src="{{ url('home/images/gallery/img-7.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope bathroom suite dining">
                            <div class="gallery_item">
                                <a  href="{{ url('home/images/gallery/popup/img-8.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                    <img src="{{ url('home/images/gallery/img-8.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope bathroom suite dining">
                            <div class="gallery_item">
                                <a  href="{{ url('home/images/gallery/popup/img-9.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                    <img src="{{ url('home/images/gallery/img-9.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ground bathroom">
                            <div class="gallery_item">
                                <a  href="{{ url('home/images/gallery/popup/img-10.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                    <img src="{{ url('home/images/gallery/img-10.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ground bathroom suite ">
                            <div class="gallery_item">
                                <a  href="{{ url('home/images/gallery/popup/img-11.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                    <img src="{{ url('home/images/gallery/img-11.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ground bathroom">
                            <div class="gallery_item">
                                <a  href="{{ url('home/images/gallery/popup/img-12.jpg') }}" class="gallery-popup mfp-image" title="Luxury Room view all">
                                    <img src="{{ url('home/images/gallery/img-12.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                    </div>
                </div>

                <div class="our-gallery text-center">
                    <a href="#" class="awe-btn awe-btn-default">BROWSE OUR GALLERY</a>
                </div>

            </div>
            <!-- GALLERY CONTENT -->

        </div>
    </section>
    <!-- END / GALLERY -->

    @endsection

@section('scripts')

    <script>

    </script>

@stop('scripts')