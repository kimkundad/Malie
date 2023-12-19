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
                <div class="text text-center">
                    <h2>LUXURY ROOM</h2>
                    <p>Lorem Ipsum is simply dummy text</p>
                </div>
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
                    <div class="col-lg-9">
                        
                        <!-- LAGER IMGAE -->
                        <div class="room-detail_img">
                            <div class="room_img-item">
                                <img src="{{ url('home/images/example/room/out._w.webp') }}" alt="">    
                                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                            </div>
                            <div class="room_img-item">
                                <img src="{{ url('home/images/example/room/LINE_ALBUM_9766-_2_๒๓๐๗๐๙_7.jpg') }}" alt="">    
                                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                            </div>
                            <div class="room_img-item">
                                <img src="{{ url('home/images/example/room/LINE_ALBUM_9766-_2_๒๓๐๗๐๙_2.jpg') }}" alt="">    
                                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                            </div>
                            <div class="room_img-item">
                                <img src="{{ url('home/images/example/room/LINE_ALBUM_9766-_2_๒๓๐๗๐๙_3.jpg') }}" alt="">    
                                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                            </div>
                            <div class="room_img-item">
                                <img src="{{ url('home/images/example/room/LINE_ALBUM_9766-_2_๒๓๐๗๐๙_4.jpg') }}" alt="">    
                                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                            </div>
                            <div class="room_img-item">
                                <img src="{{ url('home/images/example/room/LINE_ALBUM_9766-_2_๒๓๐๗๐๙_5 (1).jpg') }}" alt="">    
                                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                            </div>
                            <div class="room_img-item">
                                <img src="{{ url('home/images/example/room/LINE_ALBUM_9766-_2_๒๓๐๗๐๙_6.jpg') }}" alt="">    
                                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                            </div>
                        </div>
                        <!-- END / LAGER IMGAE -->
                        
                        <!-- THUMBNAIL IMAGE -->
                        <div class="room-detail_thumbs">
                            <a href="#"><img src="{{ url('home/images/example/room/out._w.webp') }}" alt=""></a>
                            <a href="#"><img src="{{ url('home/images/example/room/LINE_ALBUM_9766-_2_๒๓๐๗๐๙_7.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ url('home/images/example/room/LINE_ALBUM_9766-_2_๒๓๐๗๐๙_2.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ url('home/images/example/room/LINE_ALBUM_9766-_2_๒๓๐๗๐๙_3.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ url('home/images/example/room/LINE_ALBUM_9766-_2_๒๓๐๗๐๙_4.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ url('home/images/example/room/LINE_ALBUM_9766-_2_๒๓๐๗๐๙_5 (1).jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ url('home/images/example/room/LINE_ALBUM_9766-_2_๒๓๐๗๐๙_6.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ url('home/images/example/room/LINE_ALBUM_9766-_2_๒๓๐๗๐๙_8.jpg') }}" alt=""></a>
                        </div>
                        <!-- END / THUMBNAIL IMAGE -->

                    </div>

                    <div class="col-lg-3">

                        <!-- FORM BOOK -->
                        <div class="room-detail_book">

                            <div class="room-detail_total">
                                <img src="images/icon-logo.png" alt="" class="icon-logo">
                                
                                <h6>STARTING ROOM FROM</h6>
                                
                                <p class="price">
                                    <span class="amout">$260</span>  /days
                                </p>
                            </div>
                            
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

                    </div>
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

                                <div class="room-detail_overview">
                                    <h5 class='text-uppercase
                                    '>de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h5>
                                    <p>Located in the heart of Aspen with a unique blend of contemporary luxury and historic heritage, deluxe accommodations, superb amenities, genuine hospitality and dedicated service for an elevated experience in the Rocky Mountains.</p>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-4">
                                            <h6>SPECIAL ROOM</h6>
                                            <ul>
                                                <li>Max: 4 Person(s)</li>
                                                <li>Size: 35 m2 / 376 ft2</li>
                                                <li>View: Ocen</li>
                                                <li>Bed: King-size or twin beds</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                            <h6>SERVICE ROOM</h6>
                                            <ul>
                                                <li>Oversized work desk</li>
                                                <li>Hairdryer</li>
                                                <li>Iron/ironing board upon request</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

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