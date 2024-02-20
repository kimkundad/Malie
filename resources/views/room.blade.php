@extends('layouts.template2')

    @section('title')
    ห้องที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Kor Samui)
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
                    <h2>Villa Malie</h2>
                    <p>Villa Malie for parties or relaxation, we have all styles to choose from.</p>
                </div>
                @else
                <div class="text text-center">
                    <h2>Villa Malie</h2>
                    <p>Villa Malie สำหรับ ปาร์ตี้ หรือ แนวพักผ่อน เรามีให้เลือกทุกแบบt</p>
                </div>
                @endif
            </div>

        </div>

    </section>
    <!-- END / SUB BANNER -->
    
    <!-- ROOM DETAIL -->
    <section class="section-room-detail bg-white">
        <div class="container">
            
            <!-- DETAIL -->
            <div class="room-detail">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <!-- LAGER IMGAE -->
                        <div class="room-detail_img">
                            @if(isset($gallery))
                                @foreach($gallery as $u)
                                    <div class="room_img-item">
                                        <img src="{{ url('images/malie/gallery/'.$u->image) }}" alt="@if(session()->get('locale') == 'en')
                                        {{ $u->detail_en }}
                                        @else
                                        {{ $u->detail }}
                                        @endif">    
                                        <h6>
                                            @if(session()->get('locale') == 'en')
                                            {{ $u->detail_en }}
                                            @else
                                            {{ $u->detail }}
                                            @endif
                                        </h6>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <!-- END / LAGER IMGAE -->
                        
                        <!-- THUMBNAIL IMAGE -->
                        <div class="room-detail_thumbs">
                            @if(isset($gallery))
                                @foreach($gallery as $u)
                                    <a href="#"><img src="{{ url('images/malie/gallery/'.$u->image) }}" alt="
                                        @if(session()->get('locale') == 'en')
                                        {{ $u->detail_en }}
                                        @else
                                        {{ $u->detail }}
                                        @endif"></a>
                                @endforeach
                            @endif
                        </div>
                        <!-- END / THUMBNAIL IMAGE -->

                    </div>

                    {{-- <div class="col-lg-3">

                        <!-- FORM BOOK -->
                        <div class="room-detail_book">

                            
                            <div class="room-detail_form">
                                <label>Arrive</label>
                                <input type="text" class="awe-calendar from" placeholder="Arrive Date">
                                <label>Depature</label>
                                <input type="text" class="awe-calendar to" placeholder="Departure Date">
                                <label>Adult</label>
                                <select class="awe-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option selected>3</option>
                                    <option>4</option>
                                </select>
                                <label>Chirld</label>
                                <select class="awe-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option selected>3</option>
                                    <option>4</option>
                                </select>
                                <button class="awe-btn awe-btn-13">Book Now</button>
                            </div>

                        </div>
                        <!-- END / FORM BOOK -->

                    </div> --}}
                </div>
            </div>
            <!-- END / DETAIL -->
            
            <!-- TAB -->
            <div class="room-detail_tab">
                
                <div class="row">
                    <div class="col-md-3">
                        <ul class="room-detail_tab-header">
                            <li class="active"><a href="#overview" data-toggle="tab">OVERVIEW</a></li>
                        </ul>
                    </div>
                                    
                    <div class="col-md-9">
                        <div class="room-detail_tab-content tab-content">
                            
                            <!-- OVERVIEW -->
                            <div class="tab-pane fade active in" id="overview">

                                @if(session()->get('locale') == 'en')
                                <div class="room-detail_overview">
                                    <h5 class='text-uppercase'>The Bay Ridge (Villa 2)</h5>
                                    <p>Welcome to Villa Malie, one of only eight exclusive villas in "The Bayridge" compound. As an Airbnb guest, you'll have the privilege of enjoying our luxurious three-bedroom, four-bathroom retreat nestled on a hill in Bangrak, just 8 minutes from Samui Airport. This villa offers the perfect blend of safety, accessibility, and luxury.</p>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">
                                            <h6>รายละเอียดบ้าน</h6>
                                            <ul>
                                                <li>10 ห้องนอน </li>
                                                <li>10 ห้องน้ำ</li>
                                                <li>รับสัตว์เลี้ยงขนาดเล็กและขนาดกลาง ตัวละ 500 บาท/คืน</li>
                                            </ul>
                                            <p class="text-danger">กรุณาโทรแจ้งก่อนเช็คอิน-เช็คเอาท์ 30 นาที</p>
                                            <br>
                                            <h6>ฟังชั่นส์บ้านรายละเอียด มีดังนี้</h6>
                                            <ul>
                                                <li>สระว่ายน้ำส่วนตัว </li>
                                                <li>ระบบคลอรีน</li>
                                                <li>คาราโอเกะ</li>

                                                <li>โต๊ะพูล </li>
                                                <li>ห่วงยางแฟนซี</li>
                                                <li>ไฟเธค</li>
                                                <li>ที่นอนเสริมคนเกิน </li>
                                                <li>สไลด์เดอร์</li>
                                                <li>เตาปิ้งย่าง</li>
                                                <li>อุปกรณ์ครัวครบ</li>
                                                <li>Free Wifi</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <h6>โลเคชั่น</h6>
                                            <ul>
                                                <li>หาดบ้านอำเภอ</li>
                                                <li>ติดทะเล</li>
                                            </ul>
                                        </div>
                                       
                                        <div class="col-xs-6 col-md-6">
                                            <h6>ชั้น 1 มี ทั้งหมด 4 ห้องนอน</h6>
                                            <ul>
                                                <li>ห้องที่ 1 ชั้นล่าง เตียง 6 ฟุต 1 เตียง (ห้องน้ำในตัว) </li>
                                                <li>ห้องที่ 2 ชั้นล่าง เตียง 6 ฟุต 1 เตียง(ห้องน้ำในตัว)</li>
                                                <li>ห้องที่ 3 ชั้นล่าง เตียง 6 ฟุต 1 เตียง(ห้องน้ำในตัว)</li>
                                                <li>ห้องที่ 4 ชั้นล่าง เตียง 5 ฟุต 2 เตียง(ห้องน้ำในตัว) </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <h6>ชั้น 2 จะมี 5 ห้องนอน</h6>
                                            <ul>
                                                <li>ห้องที่ 5 ชั้น 2 เตียง 6 ฟุต 1 เตียง และ เตียง 3 ฟุต 1 เตียง (ห้องน้ำแยก ติดกับห้องนี้) </li>
                                                <li>ห้องที่ 6 ชั้น 2 เตียง 6 ฟุต 1 เตียง(ห้องน้ำในตัว)</li>
                                                <li>ห้องที่ 7 ชั้น 2 เตียง 5 ฟุต 1 เตียง(ห้องน้ำแยก ติดกับห้องนี้)</li>
                                                <li>ห้องที่ 8 ชั้น 2 เตียง 6 ฟุต 1 เตียง(ห้องน้ำในตัว)</li>
                                                <li>ห้องที่ 9 ชั้น 2 เตียง 6 ฟุต 1 เตียง และ 5 ฟุต 1 เตียง (ห้องน้ำในตัว)</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <h6>สระว่ายน้ำ</h6>
                                            <ul>
                                                <li>สระว่ายน้ำ กว้าง 5 เมตร</li>
                                                <li>ยาว 14 เมตร ลึก150 ซม.</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <h6>ที่จอดรถ</h6>
                                            <ul>
                                                <li>จอดรถในบ้าน2คัน</li>
                                                <li>จอดหน้าบ้านได้ 10 – 15 คัน</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <h6>“เงื่อนไขเข้าพักพูลวิลล่าพัทยา”</h6>
                                            <ul>
                                                <li>⏰ เช็คอิน : (บ่าย 2)</li>
                                                <li>⏰ เช็คเอาท์ก่อน : (11:00)</li>
                                                <li>คนเกินเสริมท่านละ 700 ฿</li>
                                                <li>พักได้สูงสุด 40 ท่าน</li>
                                                <li>ประกันความเสียหาย 10,000 ฿</li>
                                            </ul>
                                        </div>
                                        
                                    </div>

                                </div>
                                @else
                                <div class="room-detail_overview">
                                    <h5 class='text-uppercase'>The Bay Ridge (Villa 2)</h5>
                                    <p>Welcome to Villa Malie, one of only eight exclusive villas in "The Bayridge" compound. As an Airbnb guest, you'll have the privilege of enjoying our luxurious three-bedroom, four-bathroom retreat nestled on a hill in Bangrak, just 8 minutes from Samui Airport. This villa offers the perfect blend of safety, accessibility, and luxury.</p>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">
                                            <h6>รายละเอียดบ้าน</h6>
                                            <ul>
                                                <li>10 ห้องนอน </li>
                                                <li>10 ห้องน้ำ</li>
                                                <li>รับสัตว์เลี้ยงขนาดเล็กและขนาดกลาง ตัวละ 500 บาท/คืน</li>
                                            </ul>
                                            <p class="text-danger">กรุณาโทรแจ้งก่อนเช็คอิน-เช็คเอาท์ 30 นาที</p>
                                            <br>
                                            <h6>ฟังชั่นส์บ้านรายละเอียด มีดังนี้</h6>
                                            <ul>
                                                <li>สระว่ายน้ำส่วนตัว </li>
                                                <li>ระบบคลอรีน</li>
                                                <li>คาราโอเกะ</li>

                                                <li>โต๊ะพูล </li>
                                                <li>ห่วงยางแฟนซี</li>
                                                <li>ไฟเธค</li>
                                                <li>ที่นอนเสริมคนเกิน </li>
                                                <li>สไลด์เดอร์</li>
                                                <li>เตาปิ้งย่าง</li>
                                                <li>อุปกรณ์ครัวครบ</li>
                                                <li>Free Wifi</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <h6>โลเคชั่น</h6>
                                            <ul>
                                                <li>หาดบ้านอำเภอ</li>
                                                <li>ติดทะเล</li>
                                            </ul>
                                        </div>
                                       
                                        <div class="col-xs-6 col-md-6">
                                            <h6>ชั้น 1 มี ทั้งหมด 4 ห้องนอน</h6>
                                            <ul>
                                                <li>ห้องที่ 1 ชั้นล่าง เตียง 6 ฟุต 1 เตียง (ห้องน้ำในตัว) </li>
                                                <li>ห้องที่ 2 ชั้นล่าง เตียง 6 ฟุต 1 เตียง(ห้องน้ำในตัว)</li>
                                                <li>ห้องที่ 3 ชั้นล่าง เตียง 6 ฟุต 1 เตียง(ห้องน้ำในตัว)</li>
                                                <li>ห้องที่ 4 ชั้นล่าง เตียง 5 ฟุต 2 เตียง(ห้องน้ำในตัว) </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <h6>ชั้น 2 จะมี 5 ห้องนอน</h6>
                                            <ul>
                                                <li>ห้องที่ 5 ชั้น 2 เตียง 6 ฟุต 1 เตียง และ เตียง 3 ฟุต 1 เตียง (ห้องน้ำแยก ติดกับห้องนี้) </li>
                                                <li>ห้องที่ 6 ชั้น 2 เตียง 6 ฟุต 1 เตียง(ห้องน้ำในตัว)</li>
                                                <li>ห้องที่ 7 ชั้น 2 เตียง 5 ฟุต 1 เตียง(ห้องน้ำแยก ติดกับห้องนี้)</li>
                                                <li>ห้องที่ 8 ชั้น 2 เตียง 6 ฟุต 1 เตียง(ห้องน้ำในตัว)</li>
                                                <li>ห้องที่ 9 ชั้น 2 เตียง 6 ฟุต 1 เตียง และ 5 ฟุต 1 เตียง (ห้องน้ำในตัว)</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <h6>สระว่ายน้ำ</h6>
                                            <ul>
                                                <li>สระว่ายน้ำ กว้าง 5 เมตร</li>
                                                <li>ยาว 14 เมตร ลึก150 ซม.</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <h6>ที่จอดรถ</h6>
                                            <ul>
                                                <li>จอดรถในบ้าน2คัน</li>
                                                <li>จอดหน้าบ้านได้ 10 – 15 คัน</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <h6>“เงื่อนไขเข้าพักพูลวิลล่าพัทยา”</h6>
                                            <ul>
                                                <li>⏰ เช็คอิน : (บ่าย 2)</li>
                                                <li>⏰ เช็คเอาท์ก่อน : (11:00)</li>
                                                <li>คนเกินเสริมท่านละ 700 ฿</li>
                                                <li>พักได้สูงสุด 40 ท่าน</li>
                                                <li>ประกันความเสียหาย 10,000 ฿</li>
                                            </ul>
                                        </div>
                                        
                                    </div>

                                </div>
                                @endif

                            </div>
                            <!-- END / OVERVIEW -->


                           

                        </div>
                    </div>

                </div>

            </div>
            <!-- END / TAB -->

           

        </div>
    </section>
    <!-- END / SHOP DETAIL -->


    @endsection

    @section('scripts')
    
        <script>
    
        </script>
    
    @stop('scripts')