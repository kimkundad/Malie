@extends('layouts.template2')

    @section('title')
    เกี่ยวกับเรา ที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Kor Samui)
    @stop

    @section('og')
    
    @stop('og')

    @section('stylesheet')

    <style>
        .center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.about-item .text .desc {
    margin-top: 5px;
    color: #333333;
    font-size: 12px;
}
.about-item .text h2 {
    line-height: 1.2em;
}
.heading {
    margin: 0;
    color: #232323;
    font-size: 22px;
    font-weight: bold;
    font-family: 'Montserrat';
    text-transform: uppercase;
    line-height: 1;
    position: relative;
}
.about-item .text {
    width: 50%;
    float: left;
    padding-left: 40px;
    margin-top: 10px;
}
p {
    font-size: 13px;
}
    </style>

    @stop('stylesheet')

    @section('content')


    <!-- SUB BANNER -->
    <section class="section-sub-banner bg-9">
        <div class="awe-overlay"></div>
        <div class="sub-banner">
            <div class="container">
                
                @if(session()->get('locale') == 'en')
                <div class="text text-center">
                    <h2>ABOUT US</h2>
                    <p>one of only eight exclusive villas in "The Bayridge" compound</p>
                </div>
                @else
                <div class="text text-center">
                    <h2>เกี่ยวกับเรา</h2>
                    <p>หนึ่งในแปดวิลล่าสุดพิเศษในบริเวณ "The Bayridge"</p>
                </div>
                @endif
            </div>

        </div>

    </section>
    <!-- END / SUB BANNER -->
    
    <!-- ABOUT -->
    <section class="section-about">
        <div class="container">

            <div class="about">

                <!-- ITEM -->
                <div class="about-item">

                    <div class="img owl-single">
                        @if(isset($images))
                        @foreach($images as $item)
                        <img src="{{ url('images/malie/gallery/'.$item->image) }}" alt="{{ $item->detail }}">
                        @endforeach
                        @endif
                    </div>

                    @if(session()->get('locale') == 'en')
                    <div class="text">
                        <h2 class="heading">ABOUT Villa Malie</h2>
                        <div class="desc">
                            <p>Welcome to Villa Malie, one of only eight exclusive villas in "The Bayridge" 
                                compound. As our special guest, you'll have the privilege of enjoying our 
                                luxurious three-bedroom, four-bathroom retreat nestled on a hill in Bangrak, 
                                just 8 minutes from Samui Airport. This villa offers the perfect blend of safety, 
                                accessibility, and luxury.
                            </p>
                            <h5>Spectacular Panoramic Views</h5>
                            <p>Villa Malie is renowned for its unrivaled panoramic views of Koh Samui. 
                                Feast your eyes on breathtaking sunsets, Plai Laem hills, Bangrak beach, 
                                and the entire North-Western coast of Choengmon. You'll also have a 
                                front-row seat to the Big Buddha Temple and neighboring island Koh Phangan from your private haven.</p>
                            <h5>Safe and Exclusive</h5>
                            <p>Our villa is one of only eight in "The Bayridge" compound, ensuring your safety and privacy throughout your stay.</p>
                        </div>
                    </div>
                    @else
                    <div class="text">
                        <h2 class="heading">เกี่ยวกับ Villa Malie</h2>
                        <div class="desc">
                            <p>ยินดีต้อนรับสู่ Villa Malie หนึ่งในแปดวิลล่าสุดพิเศษใน "The Bayridge"
                                สารประกอบ. ในฐานะแขกของ Airbnb คุณจะได้รับสิทธิพิเศษในการเพลิดเพลินไปกับเรา
                                ที่พักหรู 3 ห้องนอน 4 ห้องน้ำ ตั้งอยู่บนเนินเขาในเขตบางรัก
                                เพียง 8 นาทีจากสนามบินสมุย วิลล่าแห่งนี้มีการผสมผสานที่ลงตัวของความปลอดภัย
                                การเข้าถึงและความหรูหรา
                            </p><br>
                            <p>Villa Malie มีชื่อเสียงในด้านทัศนียภาพอันงดงามของเกาะสมุยที่ไม่มีใครเทียบได้
                                ชมพระอาทิตย์ตกดิน เนินเขาปลายแหลม หาดบางรัก
                                 และชายฝั่งตะวันตกเฉียงเหนือของเชิงมนทั้งหมด นอกจากนี้คุณยังจะมี
                                 ที่นั่งแถวหน้าวัดพระใหญ่และเกาะใกล้เคียงเกาะพะงัน
                                 จากสวรรค์ส่วนตัวของคุณ</p>
                        </div>
                    </div>
                    @endif

                </div>
                <!-- END / ITEM -->

                <!-- ITEM -->
                <div class="about-item about-right">

                    <div class="img">
                        <img src="{{ url('home/images/example/out.-2_w - Copy.webp') }}" alt="">
                    </div>
                    @if(session()->get('locale') == 'en')
                    <div class="text">
                        <div class="desc">
                            <h5>Accessibility</h5>
                            <p>While you'll evel in the tremendous views, you'll be pleased to know that Villa Malie is 
                                just a 2-minute drive up from the main beach road. This means you can easily explore the 
                                island's attractions and access the beach with utmost convenience.</p>
                            <h5>Elevator Convenience</h5>
                            <p>For guests with special needs or elderly visitors, our Schneider elevator servicing all floors 
                                ensures a welcoming and accessible experience. Everyone is invited to relish the beauty of Villa Malie.
                            </p>
                            <h5>Luxurious Living Spaces</h5>
                            <p>Villa Malie spans three spacious floors, each with 150 sqm of modern and well-equipped living space, 
                                totaling 450 sqm. Enjoy an infinity pool on the top floor, a large patio with outdoor furniture, 
                                and all the amenities you'd expect for a luxurious stay, including a modern fully appointed European 
                                kitchen with oven, microwave, dishwasher, wine fridge, and a refrigerator with an ice maker.
                            </p>
                        </div>
                    </div>
                    @else
                    <div class="text">
                        <h2 class="heading">ความบันเทิงและความสะดวกสบาย</h2>
                        <div class="desc">
                            <p>เราคิดถึงทุกสิ่งทุกอย่างเพื่อให้การเข้าพักของคุณสนุกสนาน นอกเหนือจากสิ่งอำนวยความสะดวกที่กล่าวไว้ข้างต้น วิลล่า 
                                มาลียังมีห้องสำหรับครอบครัว/ห้องเฟล็กพร้อมโฮมเธียเตอร์ 
                                โซนสำหรับเด็กโดยเฉพาะสำหรับเด็กเล็ก และสำนักงานที่มีอุปกรณ์ครบครันสำหรับการทำงานทางไกล 
                                เชื่อมต่อขณะพักสมองจากทิวทัศน์อันน่าทึ่ง แต่ละชั้นมีระบบเสียง Sonos และทีวี LED จอแบนขนาดใหญ่พร้อมแอปสมาร์ททีวีที่ตั้งโปรแกรมไว้ล่วงหน้า 
                                (NETFLIX, HBO, Disney และอื่นๆ) เพื่อความบันเทิงของคุณ นอกจากนี้ยังมีห้องซักรีดโดยเฉพาะพร้อมเครื่องซักผ้าและเครื่องอบผ้าเพื่อความสะดวกของคุณ 
                                เพื่อให้เสื้อผ้าของคุณสะอาดอยู่เสมอระหว่างการเข้าพัก</p>
                        </div>
                    </div>
                    @endif

                </div>
                <!-- END / ITEM -->

            </div>

        </div>
    </section>
    <!-- END / ABOUT -->

    <!-- HOTEL STATISTICS -->
    <section class="section-statistics bg-10">
            
        <div class="awe-overlay"></div>

        <div class="container">
            <div class="statistics">
                @if(session()->get('locale') == 'en')
                <h2 class="heading white text-center">Villa Malie statistics</h2>
                @else
                <h2 class="heading white text-center">สถิติของ Villa Malie</h2>
                @endif
            
                <div class="statistics_content">
                    <div class="row">
            
                        <!-- ITEM -->
                        <div class="col-xs-6 col-md-3">
                            <div class="statistics_item">
                                <span class="count">768</span>
                                <span>Guest Stay</span>
                            </div>
                        </div>
                        <!-- END ITEM -->
            
                        <!-- ITEM -->
                        <div class="col-xs-6 col-md-3">
                            <div class="statistics_item">
                                <span class="count">632</span>
                                <span>BOOK ROOM</span>
                            </div>
                        </div>
                        <!-- END ITEM -->
            
                        <!-- ITEM -->
                        <div class="col-xs-6 col-md-3">
                            <div class="statistics_item">
                                <span class="count">1024</span>
                                <span>MEMBER STAY</span>
                            </div>
                        </div>
                        <!-- END ITEM -->
            
                        <!-- ITEM -->
                        <div class="col-xs-6 col-md-3">
                            <div class="statistics_item">
                                <span class="count">256</span>
                                <span>MEALS SERVED</span>
                            </div>
                        </div>
                        <!-- END ITEM -->
            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / HOTEL STATISTICS -->

    <!-- TEAM -->
    <section class="section-team">
        <div class="container">

            <div class="team">
                @if(session()->get('locale') == 'en')
                <h2 class="heading text-center">Manager team</h2>
                <p class="sub-heading text-center">Our villa is one of only eight in "The Bayridge" compound, ensuring your safety and privacy throughout your stay.</p>
                @else
                <h2 class="heading text-center">ทีมงานผู้จัดการ</h2>
                <p class="sub-heading text-center">วิลล่าของเราเป็นหนึ่งในแปดแห่งในบริเวณ "เดอะเบย์ริดจ์" ซึ่งรับประกันความปลอดภัยและความเป็นส่วนตัวของคุณตลอดการเข้าพัก</p>
                @endif
                
                
                <div class="team_content">
                    <div class="row justify-content-center">

                        <!-- ITEM -->
                        <div class="col-xs-6 col-md-6 center-block">
                            <div class="team_item text-center">

                                <div class="img">
                                    <a href=""><img src="{{ url('home/images/team/img-1.jpg') }}" alt=""></a>
                                </div> 

                                <div class="text">
                                    <h2>JESSICA ALBA</h2>
                                    <span>Manager lotus Hotel</span>
                                    <p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>
                                    
                                </div>

                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="col-xs-6 col-md-6 center-block">
                            <div class="team_item text-center">

                                <div class="img">
                                    <a href=""><img src="{{ url('home/images/team/img-1.jpg') }}" alt=""></a>
                                </div> 

                                <div class="text">
                                    <h2>Robet WILIAM</h2>
                                    <span>Founder Hotel</span>
                                    <p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>
                                    
                                </div>

                            </div>
                        </div>
                        <!-- END / ITEM -->

                        

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END / TEAM -->


    @endsection

    @section('scripts')
    
        <script>
    
        </script>
    
    @stop('scripts')