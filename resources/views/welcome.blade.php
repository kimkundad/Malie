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
                            <p>Welcome to Villa Malie, one of only eight exclusive villas in "The Bayridge" compound. As an Airbnb guest, you'll have the privilege of enjoying our luxurious three-bedroom, four-bathroom retreat nestled on a hill in Bangrak, just 8 minutes from Samui Airport. This villa offers the perfect blend of safety, accessibility, and luxury.</p>
                        </div>
                        @else
                        <div class="accomd-modations-header">
                            <h2 class="heading">ยินดีต้อนรับสู่ Villa Malie</h2>
                            <img src="{{ url('home/images/icon-accmod.png') }}" alt="icon">
                            <p>ยินดีต้อนรับสู่ Villa Malie หนึ่งในแปดวิลล่าสุดพิเศษในบริเวณ "เดอะเบย์ริดจ์" ในฐานะแขกของ Airbnb คุณจะได้รับสิทธิพิเศษเพลิดเพลินไปกับการพักผ่อนอันหรูหราแบบ 3 ห้องนอน 4 ห้องน้ำบนเนินเขาในเขตบางรัก ห่างจากสนามบินสมุยเพียง 8 นาที วิลล่าแห่งนี้มีการผสมผสานที่ลงตัวระหว่างความปลอดภัย การเข้าถึง และความหรูหรา</p>
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
                            <h2 class="heading">Luxurious Living Spaces/h2>
                            <p>Villa Malie spans three spacious floors, each with 150 sqm of modern and well-equipped living space, totaling 450 sqm. Enjoy an infinity pool on the top floor, a large patio with outdoor furniture, and all the amenities you'd expect for a luxurious stay, including a modern fully appointed European kitchen with oven, microwave, dishwasher, wine fridge, and a refrigerator with an ice maker.</p>
                            <ul>
                                <li><img src="{{ url('home/images/home/ourbest/icon-3.png') }}" alt="icon">250 Best Rooms  5 Star</li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-2.png') }}" alt="icon">Wet Bar with Refrigerator</li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-4.png') }}" alt="icon">Double Whirlpool Jacuzzi Tub</li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-5.png') }}" alt="icon">Luxurious High Thread Count </li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-1.png') }}" alt="icon">Breakfast each morning</li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-6.png') }}" alt="icon">Ocean Views to lotus Hotel</li>
                            </ul>
                        </div>
                        @else
                        <div class="text">
                            <h2 class="heading">พื้นที่อยู่อาศัยที่หรูหรา</h2>
                            <p>Villa Malie ครอบคลุมพื้นที่กว้างขวาง 3 ชั้น โดยแต่ละชั้นมีพื้นที่ใช้สอยที่ทันสมัยและมีอุปกรณ์ครบครันขนาด 150 ตร.ม. รวมพื้นที่ 450 ตร.ม. เพลิดเพลินกับสระว่ายน้ำแบบอินฟินิตี้ที่ชั้นบนสุด ลานขนาดใหญ่พร้อมเฟอร์นิเจอร์กลางแจ้ง และสิ่งอำนวยความสะดวกทั้งหมดที่คุณคาดหวังสำหรับการเข้าพักที่หรูหรา รวมถึงห้องครัวสไตล์ยุโรปที่ตกแต่งอย่างทันสมัยพร้อมเตาอบ ไมโครเวฟ เครื่องล้างจาน ตู้แช่ไวน์ และตู้เย็นพร้อม เครื่องทำน้ำแข็ง</p>
                            <ul>
                                <li><img src="{{ url('home/images/home/ourbest/icon-3.png') }}" alt="icon">250 Best Rooms  5 Star</li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-2.png') }}" alt="icon">Wet Bar with Refrigerator</li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-4.png') }}" alt="icon">Double Whirlpool Jacuzzi Tub</li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-5.png') }}" alt="icon">Luxurious High Thread Count </li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-1.png') }}" alt="icon">Breakfast each morning</li>
                                <li><img src="{{ url('home/images/home/ourbest/icon-6.png') }}" alt="icon">Ocean Views to lotus Hotel</li>
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
    <div class="section-home-guestbook home-guestbook-style-2 awe-parallax bg-22 mt90 pt100 pb100">
        <div class="container">
            <div class="home-guestbook pt0 pb0">
                <div class="row">
                    <div class="col-xs-12 col-lg-6 col-lg-offset-3">
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
                    </div>
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
                                        <span class="f14">{{ $u->position }}</span>
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
                                <img class="img-responsive img-full" src="{{ url('images/malie/news/'.$u->image) }}" alt="{{ $u->title_en }}">
                            </div>
                            <div class="info">
                                <p class="date f20">
                                    {{ $u->created_at }}
                                </p>
                                <a class="title font-monserat f20 mb20 block bold upper" href="{{ url('/') }}">
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