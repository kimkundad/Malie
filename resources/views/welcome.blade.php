@extends('layouts.template')

    @section('title')
    ที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Koh Samui)
    @stop

    @section('og')
    
    @stop('og')

    @section('stylesheet')

    <style>
        .our-best .text ul li img {
    margin-right: 9px;
}
        .our-best .text ul li {
    margin-top: 15px;
    color: #232323;
    font-weight: 300;
    width: -moz-calc(50% - 1px);
    width: -o-calc(50% - 1px);
    width: -webkit-calc(50% - 1px);
    width: calc(50% - 1px);
    font-size: 12px;
    display: inline-block;
    padding-right: 5px;
    margin-bottom: 15px;
}
        .heading {
    margin: 0;
    color: #232323;
    font-size: 28px;
    font-weight: bold;
    font-family: 'Montserrat';
    text-transform: uppercase;
    line-height: 1;
    position: relative;
}
.section-home-guestbook.home-guestbook-style-2 .home-guestbook .guestbook-item .text p:before {
    content: "";
    background: url(../images/home-3/icon/before-testimonial.png);
    width: 30px;
    height: 19px;
    right: 0;
    left: -30px;
    top: -10px;
    margin: 0 auto;
    display: none
}
.section-home-guestbook.home-guestbook-style-2 .home-guestbook .guestbook-item .img {
    width: 380px;
    height: 380px;
    margin: 15px auto 15px auto;
}
.pb50{
    padding-bottom: 50px
}
.myflexbox {
    min-height: 48px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.accomd-modations-header p {
    margin: 10px auto 20px;
    max-width: 685px;
}
    </style>

    @stop('stylesheet')

    @section('content')



    <!-- BANNER SLIDER -->
    <section class="section-slider slider-style-2 clearfix">
        <h1 class="element-invisible">Slider</h1>
        <div id="slider-revolution">
            <ul>
                @isset($slide)
                    @foreach ($slide as $item)
                        <li data-transition="fade">
                            <img src="{{ url('home/images/example/out._w.webp') }}" data-bgposition="left center" data-duration="14000"
                                data-bgpositionend="right center" alt="">

                            <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240"
                                data-speed="700" data-start="1500" data-easing="easeOutBack">
                                @if(session()->get('locale') == 'en')
                                {{ $item->title_en }}
                                @else
                                {{ $item->title }}
                                @endif
                            </div>

                            <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280"
                                data-speed="700" data-easing="easeOutBack" data-start="2000">
                                @if(session()->get('locale') == 'en')
                                {{ $item->sub_title_en }}
                                @else
                                {{ $item->sub_title }}
                                @endif
                            </div>

                            <a href="{{ $item->g_btn_url !== null ? $item->g_btn_url : "#" }}" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center"
                            data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">{{ $item->g_btn_text }}</a>
                        </li>
                    @endforeach
                @endisset
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
                        <form id="ajax-form-search-room" action="{{ url('/check_out') }}" method="get">
                            <div class="availability-form">
                                <input type="text" name="arrive" class="awe-calendar from" placeholder="Arrival Date">
                                <input type="text" name="departure" class="awe-calendar to" placeholder="Departure Date">

                                <select class="awe-select" name="adults">
                                    <option>All guests</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                                
                                <div class="vailability-submit">
                                    <button type="submit" class="awe-btn awe-btn-13">FIND THE BEST RATE</button>
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
                    <div class="col-md-12">
                        @if(session()->get('locale') == 'en')
                        <div class="accomd-modations-header">
                            <h2 class="heading">Welcome to Villa Malie</h2>
                            <img src="{{ url('home/images/icon-accmod.png') }}" alt="icon">
                            <p>Welcome to Villa Malie, one of only eight exclusive villas in "The Bayridge" compound. As our special guest, you'll have the privilege of enjoying our luxurious three-bedroom, four-bathroom retreat nestled on a hill in Bangrak, just 8 minutes from Samui Airport. This villa offers the perfect blend of safety, accessibility, and luxury.</p>
                        </div>
                        @else
                        <div class="accomd-modations-header">
                            <h2 class="heading">ยินดีต้อนรับสู่ Villa Malie</h2>
                            <img src="{{ url('home/images/icon-accmod.png') }}" alt="icon">
                            <p>ยินดีต้อนรับสู่ Villa Malie หนึ่งในแปดวิลล่าสุดพิเศษในบริเวณ "The Bayridge" ในฐานะแขกพิเศษของเรา คุณจะได้รับสิทธิพิเศษในการเพลิดเพลินกับการพักผ่อนอันหรูหราแบบสามห้องนอน สี่ห้องน้ำ ตั้งอยู่บนเนินเขาในเขตบางรัก ห่างจากสนามบินสมุยเพียง 8 นาที วิลล่าแห่งนี้มีการผสมผสานที่ลงตัวระหว่างความปลอดภัย การเข้าถึง และความหรูหรา</p>
                        </div>
                        @endif
                        
                        <br>
                    </div>
                    <div class="col-md-6">
                        <div class="img about-mt-50">
                            <img src="{{ url('home/images/example/LINE_ALBUM2536.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        @if(session()->get('locale') == 'en')
                        <div class="text">
                            <h2 class="heading">Spectacular Panoramic Views</h2>
                            <span class="box-border"></span>
                            <p>Villa Malie is renowned for its unrivaled panoramic views of Koh Samui. Feast your eyes on breathtaking sunsets, Plai Laem hills, Bangrak beach, and the entire North-Western coast of Choengmon. You'll also have a front-row seat to the Big Buddha Temple and neighboring island Koh Phangan from your private haven.</p>
                            <a href="{{ url('about') }}" class="awe-btn awe-btn-default">READ MORE</a>
                        </div>
                        @else
                        <div class="text">
                            <h2 class="heading">ทัศนียภาพอันงดงามตระการตา</h2>
                            <span class="box-border"></span>
                            <p>Villa Malie มีชื่อเสียงในด้านทัศนียภาพอันงดงามที่ไม่มีใครเทียบได้ของเกาะสมุย ดื่มด่ำไปกับทัศนียภาพพระอาทิตย์ตกดิน เนินเขาปลายแหลม หาดบางรัก และชายฝั่งตะวันตกเฉียงเหนือของเชิงมน นอกจากนี้คุณยังจะได้ที่นั่งแถวหน้าไปยังวัดพระใหญ่และเกาะใกล้เคียงเกาะพะงันจากสวรรค์ส่วนตัวของคุณ</p>
                            <a href="{{ url('about') }}" class="awe-btn awe-btn-default">READ MORE</a>
                        </div>
                        @endif
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
                        @if(session()->get('locale') == 'en')
                        <div class="text">
                            <h2 class="heading">OUR BEST</h2>
                            {{-- <p>Villa Malie spans three spacious floors, each with 150 sqm of modern and well-equipped living space, totaling 450 sqm. Enjoy an infinity pool on the top floor, a large patio with outdoor furniture, and all the amenities you'd expect for a luxurious stay, including a modern fully appointed European kitchen with oven, microwave, dishwasher, wine fridge, and a refrigerator with an ice maker.</p> --}}
                            <ul>
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('home/images/home/ourbest/icon-3.png') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; ">King bed size all room </p>
                                        </div>
                                    </div>
                                    
                                </li>
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('img/pool1.jpg') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; ">Private Pool with sunbeds </p>
                                        </div>
                                    </div>
                                    
                                </li>
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('img/elevator.png') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; "> Private Elevator </p>
                                        </div>
                                    </div>
                                    
                                </li>
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('home/images/home/ourbest/icon-6.png') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; ">Ocean/Moutain View </p>
                                        </div>
                                    </div>
                                    
                                </li>
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('img/sun.png') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; ">Sunrise/Sunset View</p>
                                        </div>
                                    </div>
                                    
                                </li>
                                
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('home/images/home/ourbest/icon-1.png') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; ">BBQ</p>
                                        </div>
                                    </div>
                                    
                                </li>
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('img/protect.png') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; "> Good Security in private compound </p>
                                        </div>
                                    </div>
                                    
                                </li>
                                
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('home/images/home/ourbest/icon-5.png') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; ">Office/Children’s room </p>
                                        </div>
                                    </div>
                                    
                                </li>
                            </ul>
                        </div>
                        @else
                        <div class="text">
                            <h2 class="heading">สิ่งที่ดีที่สุดของเรา</h2>
                            {{-- <p>Villa Malie spans three spacious floors, each with 150 sqm of modern and well-equipped living space, totaling 450 sqm. Enjoy an infinity pool on the top floor, a large patio with outdoor furniture, and all the amenities you'd expect for a luxurious stay, including a modern fully appointed European kitchen with oven, microwave, dishwasher, wine fridge, and a refrigerator with an ice maker.</p> --}}
                            <ul>
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('home/images/home/ourbest/icon-3.png') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; "> เตียงคิงส์ไซส์ทุกห้องนอน </p>
                                        </div>
                                    </div>
                                    
                                </li>
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('img/pool1.jpg') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; ">สระว่ายน้ำส่วนตัว พร้อมเตียงอาบแดด </p>
                                        </div>
                                    </div>
                                    
                                </li>
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('img/elevator.png') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; "> ลิฟต์ส่วนตัวในวิลล่า </p>
                                        </div>
                                    </div>
                                    
                                </li>
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('home/images/home/ourbest/icon-6.png') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; ">วิวทะเลและภูเขา </p>
                                        </div>
                                    </div>
                                    
                                </li>
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('img/sun.png') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; "> วิวพระอาทิตย์ขึ้นและพระอาทิตย์ตก</p>
                                        </div>
                                    </div>
                                    
                                </li>
                                
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('home/images/home/ourbest/icon-1.png') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; ">เตาบาร์บีคิว</p>
                                        </div>
                                    </div>
                                    
                                </li>
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('img/protect.png') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; "> มีการรักษาความปลอดภัยที่ดี </p>
                                        </div>
                                    </div>
                                    
                                </li>
                                
                                <li>
                                    <div style="display: flex;">
                                        <img src="{{ url('home/images/home/ourbest/icon-5.png') }}" alt="icon" style="height: 48px; wight:48px"> 
                                        <div class="myflexbox ">
                                            <p style="margin-top: 2px; font-size: 12px; ">ห้องทำงานและห้องเด็กเล่น </p>
                                        </div>
                                    </div>
                                    
                                </li>
                            </ul>
                        </div>
                        @endif
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- END / OUR BEST -->

    <!-- HOME GUEST BOOK -->
    <div class="section-home-guestbook home-guestbook-style-2 awe-parallax bg-22 mt90 pb50">
        <div class="container">
            <div class="home-guestbook pt0 pb0">
                <div class="row">
                    {{-- <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                        @if(session()->get('locale') == 'en')
                        <div class="ot-heading mb40 row-20 text-center">
                            <h2>Guest book</h2>
                            <p class="sub">Your feedback means the world to us.</p>
                        </div>
                        @else
                        <div class="ot-heading mb40 row-20 text-center">
                            <h2>ผู้มาใช้บริการ</h2>
                            <p class="sub">ความคิดเห็นของคุณมีความหมายต่อ Villa Malie</p>
                        </div>
                        @endif
                    </div> --}}
                    <div class="guestbook-content text-center owl-single">

                        @if(isset($review))
                            @foreach($review as $u)
                                <!-- ITEM -->
                                <div class="guestbook-item">
                                    <div class="text">
                                        <p class="f20">{{ $u->msg }}</p>
                                    </div>
                                    <div class="img">
                                        <img src="{{ url('images/malie/review/'.$u->image) }}" alt="{{ $u->name }}">
                                    </div>
                                    <div class="info-author">
                                        <span class="f20 c-main"><strong>{{ $u->name }}</strong></span><br>
                                        {{-- <span class="f14">{{ $u->position }}</span> --}}
                                    </div>
                                </div>
                                <!-- ITEM -->
                            @endforeach
                        @endif

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
                        @if(isset($pack))
                            @foreach($pack as $u)
                                <div class="item item-deal">
                                    <div class="img">
                                        <img class="img-full" src="{{ url('images/malie/news/'.$u->image) }}" alt="{{ $u->title_en }}">
                                    </div>
                                    <div class="info">
                                        <a class="title bold f26 font-monserat upper" href="{{ url('/') }}">
                                            @if(session()->get('locale') == 'en')
                                            {{ $u->title_en }}
                                            @else
                                            {{ $u->title }}
                                            @endif</a>
                                        <p class="sub font-monserat f12 f-600 upper mt10 mb20">package</p>
                                        <a class="awe-btn awe-btn-12 btn-medium font-hind bold f12" href="{{ url('blog_detail/'.$u->id) }}">Click hear</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
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
                        @if(session()->get('locale') == 'en')
                            <h2>NEWS</h2>
                        @else
                            <h2>กิจกรรม & ประชาสัมพันธ์</h2>
                        @endif
                        </div>
                    </div>
                </div>
                <div class="row">

                    @if(isset($blog))
                    @foreach($blog as $u)
                    <div class="col-xs-12 col-sm-4">
                        <div class="item">
                            <div class="img">
                                <a href="{{ url('blog_detail/'.$u->id) }}">
                                    <img class="img-responsive img-full" src="{{ url('images/malie/news/'.$u->image) }}" alt="{{ $u->title_en }}">
                                </a>
                            </div>
                            <div class="info">
                                <p class="date f20">
                                    {{ $u->created_at }}
                                </p>
                                <a class="title font-monserat mb20 block bold upper" href="{{ url('blog_detail/'.$u->id) }}" style="font-size: 14px">
                                    @if(session()->get('locale') == 'en')
                                    {{ $u->title_en }}
                                    @else
                                    {{ $u->title }}
                                    @endif
                                </a>
                                <a class="more block f13" href="{{ url('blog_detail/'.$u->id) }}">[Read more]</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                </div>
                <div class="text-center">
                    <a href="{{ url('/blog') }}" class="awe-btn awe-btn-default font-hind f12 bold btn-medium mt15">View more</a>
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
                    @if(isset($category))
                        @foreach($category as $u)
                            <li><a href="#" data-filter=".{{ $u->cat_name }}">{{ $u->cat_name }}</a></li>
                        @endforeach
                    @endif
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
                        
                        @if(isset($images))
                            @foreach($images as $item)
                                <div class="item-isotope {{ $item->cat_name }} ">
                                    <div class="gallery_item">
                                        <a  href="{{ url('images/malie/gallery/'.$item->image) }}" class="gallery-popup mfp-image" title="{{ $item->cat_name }}">
                                            <img src="{{ url('images/malie/gallery/'.$item->image) }}" alt="{{ $item->cat_name }}">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                            @endforeach
                        @endif

                    </div>
                </div>

                <div class="our-gallery text-center">
                    <a href="{{ url('/gallery') }}" class="awe-btn awe-btn-default">BROWSE OUR GALLERY</a>
                </div>

            </div>
            <!-- GALLERY CONTENT -->

        </div>
    </section>
    <!-- END / GALLERY -->

    @endsection

@section('scripts')

    <script>

        /* Datepicker */
    DatePicker();
    function DatePicker() {
        $(".awe-calendar:not(.from, .to)").datepicker({
            prevText: '<i class="lotus-icon-left-arrow"></i>',
            nextText: '<i class="lotus-icon-right-arrow"></i>',
            buttonImageOnly: false,
        });

        var highlightedDays = [
            @if(isset($order))
            @foreach($order as $u)
            '{{ $u->dateorder }}', 
            @endforeach
            @endif
        ];

        // var highlightedDays = [
        //     '2024-02-26', 
        //     '2024-02-28', 
        //     '2024-03-28'
        // ];

        /* Datepicker from - to */
        $(".awe-calendar.from").datepicker({
            prevText: '<i class="lotus-icon-left-arrow"></i>',
            nextText: '<i class="lotus-icon-right-arrow"></i>',
            beforeShowDay: function(date) {
                var dateString = jQuery.datepicker.formatDate('yy-mm-dd', date);
                // Check if the date should be highlighted
                if ($.inArray(dateString, highlightedDays) !== -1) {
                  return [false, 'highlighted-day'];
                }
                // Check if the date should be disabled
                else if ($.inArray(dateString, highlightedDays) !== -1) {
                  return [false, 'disabled'];
                }
                return [true, ''];
               },
            buttonImageOnly: false,
            minDate: 0,
            onClose: function (selectedDate) {
                var newDate = new Date(selectedDate),
                    tomorrow = new Date(newDate.getTime() + 24 * 60 * 60 * 1000),
                    nextDate = (tomorrow.getMonth() + 1) + '/' + tomorrow.getDate() + '/' + tomorrow.getFullYear();
                $(".awe-calendar.to").datepicker("option", "minDate", nextDate).focus();
            }
        });
        $(".awe-calendar.to").datepicker({
            prevText: '<i class="lotus-icon-left-arrow"></i>',
            nextText: '<i class="lotus-icon-right-arrow"></i>',
            beforeShowDay: function(date) {
                var dateString = jQuery.datepicker.formatDate('yy-mm-dd', date);
                // Check if the date should be highlighted
                if ($.inArray(dateString, highlightedDays) !== -1) {
                  return [false, 'highlighted-day'];
                }
                // Check if the date should be disabled
                else if ($.inArray(dateString, highlightedDays) !== -1) {
                  return [false, 'disabled'];
                }
                return [true, ''];
               },
            buttonImageOnly: false,
            minDate: 0,
            onClose: function (selectedDate) {
                //$(".awe-calendar.from").datepicker( "option", "maxDate", selectedDate );
            }
        });
    }


    </script>

@stop('scripts')