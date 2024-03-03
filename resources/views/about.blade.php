@extends('layouts.template2')

    @section('title')
    เกี่ยวกับเรา ที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Koh Samui)
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
.bg-9 {
    background-image: url({{ url('home/images/banner/bg_top_title.jpg') }});
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
                </div>
                @else
                <div class="text text-center">
                    <h2>เกี่ยวกับเรา</h2>
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
                        <h2 class="heading">Welcome to Villa Malie</h2>
                        <div class="desc">
                            <p>your oasis in Bangrak, Samui! Whether it's your 
                                first time on the island or a return visit, 
                                we're thrilled to be your hosts. 
                                Nestled in the heart of Bangrak,
                                 our villa offers the perfect blend of 
                                 tranquility and convenience. Surrounded by 
                                 lush greenery, yet just a stone's throw away 
                                 from beaches, restaurants, cafes, 7/11, bars, and 
                                 markets, Villa Malie provides an ideal base for 
                                 exploring all that Samui has to offer.
                            </p>
                            <h5>Panoramic Views</h5>
                            <p>Immerse yourself in the beauty of Villa Malie, where every moment is a 
                                celebration of nature's finest artistry. Our villa is known for its unparalleled 
                                panoramic views, offering captivating vistas of both sunrise and sunset over Koh Samui. 
                                Whether you're starting your day with a sunrise yoga session or winding down with a 
                                sundowner cocktail, Villa Malie offers the perfect vantage point to witness nature's daily magic.</p>
                            <h5>Luxurious Living Spaces</h5>
                            <p>Ascend to the top floor via elevator for your own private infinity pool and spacious patio 
                                with stunning views of Koh Samui. Inside, a fully equipped European kitchen awaits, 
                                featuring top-of-the-line appliances for your culinary delights. Experience ultimate 
                                relaxation in our island designed bedrooms and indulgent bathrooms. Discover unparalleled 
                                luxury at Villa Malie, where every moment promises pure bliss.</p>
                        </div>
                    </div>
                    @else
                    <div class="text">
                        <h2 class="heading">ยินดีต้อนรับสู่ Villa Malie</h2>
                        <div class="desc">
                            <p>โอเอซิสของคุณในบางรัก สมุย! ไม่ว่าจะเป็นของคุณ
                                ครั้งแรกบนเกาะหรือกลับมาเยือน
                                เราตื่นเต้นมากที่ได้เป็นเจ้าภาพของคุณ
                                ตั้งอยู่ในใจกลางบางรัก
                                 วิลล่าของเรามีการผสมผสานที่ลงตัวของ
                                 ความเงียบสงบและความสะดวกสบาย ล้อมรอบไปด้วย
                                 แมกไม้เขียวขจีแต่อยู่ไม่ไกล
                                 จากชายหาด ร้านอาหาร ร้านกาแฟ 7/11 บาร์ และ
                                 ตลาด Villa Malie มีตำแหน่งที่เหมาะสำหรับ
                                 สำรวจทุกสิ่งที่สมุยมีให้
                            </p>
                            <h5>ทิวทัศน์มุมกว้าง</h5>
                            <p>ดื่มด่ำไปกับความงามของ Villa Malie ที่ซึ่งทุกช่วงเวลาคือ
                                การเฉลิมฉลองศิลปะที่ดีที่สุดของธรรมชาติ วิลล่าของเราขึ้นชื่อในเรื่องที่ไม่มีใครเทียบได้
                                ทิวทัศน์แบบพาโนรามานำเสนอทิวทัศน์อันน่าหลงใหลทั้งพระอาทิตย์ขึ้นและพระอาทิตย์ตกเหนือเกาะสมุย
                                ไม่ว่าคุณจะเริ่มต้นวันใหม่ด้วยการเล่นโยคะในช่วงพระอาทิตย์ขึ้นหรือผ่อนคลายด้วยการ
                                ค็อกเทลยามพระอาทิตย์ตก วิลล่า มาลี มอบจุดชมวิวที่สมบูรณ์แบบสำหรับการชมความมหัศจรรย์ของธรรมชาติในแต่ละวัน</p>
                            <h5>พื้นที่อยู่อาศัยที่หรูหรา</h5>
                            <p>ขึ้นไปชั้นบนสุดด้วยลิฟต์เพื่อไปยังสระว่ายน้ำอินฟินิตี้ส่วนตัวและลานเฉลียงอันกว้างขวาง
                                พร้อมทิวทัศน์อันงดงามของเกาะสมุย ภายในมีครัวยุโรปพร้อมอุปกรณ์ครบครันรออยู่
                                มาพร้อมเครื่องใช้ไฟฟ้าชั้นยอดเพื่อความสุขในการทำอาหารของคุณ สัมผัสประสบการณ์สุดขีด
                                ผ่อนคลายในห้องนอนที่ออกแบบบนเกาะของเราและห้องน้ำที่ผ่อนคลาย ค้นพบที่ไม่มีใครเทียบได้
                                ความหรูหราที่วิลล่า มาลี ที่ซึ่งทุกช่วงเวลารับประกันความสุขอันบริสุทธิ์</p>
                        </div>
                    </div>
                    @endif

                </div>
                <!-- END / ITEM -->

                <!-- ITEM -->
                <div class="about-item about-right">

                    <div class="img">
                        <img src="{{ url('images/malie/setting/'.img_d()) }}" alt="ABOUT US">
                    </div>
                    @if(session()->get('locale') == 'en')
                    <div class="text">
                        <div class="desc">
                            <h5>Safe and Exclusive</h5>
                            <p>1 of only 8 villas in “The Bayridge” compound, with 24/7 security, ensuring your safety and privacy throughout your stay.</p>
                            <h5>Accessibility</h5>
                            <p>Your location is centrally located in Bangrak and is just 2-minute drive (450m) to 7/11,
                                 cafes and restaurants. 3-minute drive (1.3km) to Bangrak Market and the bustling 
                                 Ferry pier to Koh Phangan. a 6-minute drive (2.7km) to the gorgeous Choengmon Beach, 
                                 and an 8-minute drive (3.3km) to Samui International Airport. All Food/Grocery Delivery apps
                                  (Villa Market,Foodpanda,Grab,7/11) will deliver directly to the villa. You can easily explore the 
                                  island’s attractions and access the beaches with utmost convenience.
                            </p>
                            <h5>Elevator Convenience</h5>
                            <p>For guests with special needs or elderly visitors, our Schneider elevator servicing all floors ensures 
                                a welcoming and accessible experience for all. Everyone is invited to relish the beauty and tranquility of Villa Malie.
                            </p>
                        </div>
                    </div>
                    @else
                    <div class="text">
                        <div class="desc">
                            <h5>ปลอดภัยและพิเศษ</h5>
                            <p>วิลล่า 1 ใน 8 หลังในบริเวณ "เดอะเบย์ริดจ์" พร้อมระบบรักษาความปลอดภัยตลอด 24 ชั่วโมงทุกวัน รับประกันความปลอดภัยและความเป็นส่วนตัวของคุณตลอดการเข้าพัก</p>
                            <h5>การเข้าถึง</h5>
                            <p>ที่ตั้งของคุณตั้งอยู่ใจกลางเมืองบางรักและใช้เวลาขับรถเพียง 2 นาที (450 ม.) ถึง 7/11
                                ร้านกาแฟและร้านอาหาร ขับรถ 3 นาที (1.3 กม.) ถึงตลาดบางรักและความคึกคัก
                                ท่าเรือเฟอร์รี่ไปเกาะพะงัน ขับรถ 6 นาที (2.7 กม.) ไปยังหาดเชิงมนอันงดงาม
                                และใช้เวลาขับรถ 8 นาที (3.3 กม.) ไปยังสนามบินนานาชาติสมุย แอปส่งอาหาร/ของชำทั้งหมด
                                 (วิลล่ามาร์เก็ต,ฟู้ดแพนด้า,แกร็บ,7/11) จะส่งตรงถึงวิลล่า คุณสามารถสำรวจได้อย่างง่ายดาย
                                 สถานที่ท่องเที่ยวของเกาะและการเข้าถึงชายหาดด้วยความสะดวกสบายสูงสุด
                            </p>
                            <h5>ความสะดวกสบายของลิฟต์</h5>
                            <p>สำหรับแขกที่มีความต้องการพิเศษหรือแขกผู้สูงอายุ ลิฟต์ Schneider ของเราพร้อมให้บริการทุกชั้น
                                ประสบการณ์ที่อบอุ่นและเข้าถึงได้สำหรับทุกคน ขอเชิญทุกท่านมาเพลิดเพลินกับความงามและความเงียบสงบของวิลล่ามาลี
                            </p>
                        </div>
                    </div>
                    @endif

                </div>
                <!-- END / ITEM -->

            </div>

        </div>
    </section>
    <!-- END / ABOUT -->

   

    @endsection

    @section('scripts')
    
        <script>
    
        </script>
    
    @stop('scripts')