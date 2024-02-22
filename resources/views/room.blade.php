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
                                    <h5 class='text-uppercase'>Welcome to Villa Malie</h5>
                                    <p>
                                        The bedrooms are modern and comfortably furnished and offer the ideal retreat for 
                                        anyone looking for peace and quiet. The perfectly integrated technology ensures 
                                        excellent entertainment when needed. Ensuite bathrooms offer the comfort that the 
                                        discerning guest expects.
                                    </p>
                                    <p>🛌 Suite Room (King bed) </p>
                                    <p>🛌 Second Bedroom (King bed)</p>
                                    <p>🛌 Bedroom with Garden (King bed)</p>

                                    <h6>Living Area</h6>
                                    <p>The spacious entrance leads you directly to the living room with its 
                                        breathtaking View enhanced by the floor to ceiling glass walls that maximize 
                                        light and space. The entire glass front can be opened and removed to enjoy a 
                                        combination of patio and living room embraced Enjoy an infinity pool on the top floor, 
                                        a large patio with outdoor furniture, and all the amenities you'd expect for a luxurious stay, 
                                        including a modern fully appointed European kitchen with oven, microwave, dishwasher, wine fridge, 
                                        and a refrigerator with an ice maker.
                                    </p>
                                    <h6>Terrace and Pool </h6>
                                    <p>Centerpieces for unforgettable memories at Villa Malie are the terraces and the infinity pool 
                                        that allow enjoying the beautiful landscapes whilst enjoying the most diverse activities.
                                    </p>
                                    <p>The beautiful terraces not only allow for poolside moments enjoying the scenery and sunshine but also for 
                                        Yoga retreats, deeply relaxing massages or watching the sunrise and sunset over Samui.</p>
                                    <br>
                                    <p>Please let us know in advance when you will be arriving and give us your flight number. 
                                        Check-In will be done by our Villa Manager. Check-In time is 2pm. If we don't have any 
                                        guests leaving on the same day, we may be able to welcome you earlier.
                                    </p>
                                    <h6>📍CHECK-OUT</h6>
                                    <p>Check-Out time is 12pm. Should you wish to leave later than this, please contact us in advance. 
                                        If we don't have any guests arriving on the same day, we will try to make this possible.</p>
                                    <h6>AIRPORT TRANSFER</h6>
                                    <p>Airport transfer Service is on request. Transfer to any pier is not included.</p>
                                    <h6>DEPOSIT</h6>
                                    <p>We charge a deposit of 💰 THB 20,000 💰 in cash at check in. You will get back this deposit at check out.</p>
                                    <h6>ELECTRICITY</h6>
                                    <p>The use of electricity will be charged extra upon usage. This is a common practice in Thailand. The villa has 
                                        a solar roof which helps to minimize the electricity usage. Please also respect the environment and do not leave lights and AC on needlessly.
                                    </p>
                                    <h6>SMOKING</h6>
                                    <p>Please do not smoke indoors. Use the outdoor area for smoking. Ashtrays are available at the villa.</p>
                                    <h6>NOISE</h6>
                                    <p>No loud music (indoor and outdoor). Please respect the neighborhood.</p>
                                    <h6>🐶PETS</h6>
                                    <p>Pets are not allowed. </p>
                                    <h6>GARBAGE</h6>
                                    <p>Please use an outside bin to remove garbage.</p>
                                    <h6>CLEANING</h6>
                                    <p>Pool maintenance (daily), garden care (daily) and villa cleaning (1x per week) are included in the rental price.</p>
                                    <h6>BED LINEN</h6>
                                    <p>Bed linens are provided for all beds.</p>
                                    <h6>TOWELS</h6>
                                    <p>All towels for the bathrooms and the pool deck are provided.</p>
                                    <h6>SUN & SHADOW</h6>
                                    <p>If you like to sunbathe, there are enough sunny parts at the pool all day long. If you prefer less sun, you can sit under the roof in the shade.</p>
                                    <h6>BEACH</h6>
                                    <p>We provide beach bags and towels for our guests.</p>
                                    <h6>RAIN</h6>
                                    <p>If it's raining, you can use the umbrellas provided in any wardrobe at the villa.</p>
                                    <h6>SAFETY</h6>
                                    <p>The villa meets the security requirements for rentals. The necessary equipment and instructions are installed: fire alarm, fire extinguisher, 
                                        first aid kit, rescue ring, indication of pool depth and pool rules. We have an official license to rent out the villa.
                                    </p>

                                </div>
                                @else
                                <div class="room-detail_overview">
                                    <h5 class='text-uppercase'>Welcome to Villa Malie</h5>
                                    <p>
                                        The bedrooms are modern and comfortably furnished and offer the ideal retreat for 
                                        anyone looking for peace and quiet. The perfectly integrated technology ensures 
                                        excellent entertainment when needed. Ensuite bathrooms offer the comfort that the 
                                        discerning guest expects.
                                    </p>
                                    <p>🛌 Suite Room (King bed) </p>
                                    <p>🛌 Second Bedroom (King bed)</p>
                                    <p>🛌 Bedroom with Garden (King bed)</p>

                                    <h6>Living Area</h6>
                                    <p>The spacious entrance leads you directly to the living room with its 
                                        breathtaking View enhanced by the floor to ceiling glass walls that maximize 
                                        light and space. The entire glass front can be opened and removed to enjoy a 
                                        combination of patio and living room embraced Enjoy an infinity pool on the top floor, 
                                        a large patio with outdoor furniture, and all the amenities you'd expect for a luxurious stay, 
                                        including a modern fully appointed European kitchen with oven, microwave, dishwasher, wine fridge, 
                                        and a refrigerator with an ice maker.
                                    </p>
                                    <h6>Terrace and Pool </h6>
                                    <p>Centerpieces for unforgettable memories at Villa Malie are the terraces and the infinity pool 
                                        that allow enjoying the beautiful landscapes whilst enjoying the most diverse activities.
                                    </p>
                                    <p>The beautiful terraces not only allow for poolside moments enjoying the scenery and sunshine but also for 
                                        Yoga retreats, deeply relaxing massages or watching the sunrise and sunset over Samui.</p>
                                    <br>
                                    <p>Please let us know in advance when you will be arriving and give us your flight number. 
                                        Check-In will be done by our Villa Manager. Check-In time is 2pm. If we don't have any 
                                        guests leaving on the same day, we may be able to welcome you earlier.
                                    </p>
                                    <h6>📍CHECK-OUT</h6>
                                    <p>Check-Out time is 12pm. Should you wish to leave later than this, please contact us in advance. 
                                        If we don't have any guests arriving on the same day, we will try to make this possible.</p>
                                    <h6>AIRPORT TRANSFER</h6>
                                    <p>Airport transfer Service is on request. Transfer to any pier is not included.</p>
                                    <h6>DEPOSIT</h6>
                                    <p>We charge a deposit of 💰 THB 20,000 💰 in cash at check in. You will get back this deposit at check out.</p>
                                    <h6>ELECTRICITY</h6>
                                    <p>The use of electricity will be charged extra upon usage. This is a common practice in Thailand. The villa has 
                                        a solar roof which helps to minimize the electricity usage. Please also respect the environment and do not leave lights and AC on needlessly.
                                    </p>
                                    <h6>SMOKING</h6>
                                    <p>Please do not smoke indoors. Use the outdoor area for smoking. Ashtrays are available at the villa.</p>
                                    <h6>NOISE</h6>
                                    <p>No loud music (indoor and outdoor). Please respect the neighborhood.</p>
                                    <h6>🐶PETS</h6>
                                    <p>Pets are not allowed. </p>
                                    <h6>GARBAGE</h6>
                                    <p>Please use an outside bin to remove garbage.</p>
                                    <h6>CLEANING</h6>
                                    <p>Pool maintenance (daily), garden care (daily) and villa cleaning (1x per week) are included in the rental price.</p>
                                    <h6>BED LINEN</h6>
                                    <p>Bed linens are provided for all beds.</p>
                                    <h6>TOWELS</h6>
                                    <p>All towels for the bathrooms and the pool deck are provided.</p>
                                    <h6>SUN & SHADOW</h6>
                                    <p>If you like to sunbathe, there are enough sunny parts at the pool all day long. If you prefer less sun, you can sit under the roof in the shade.</p>
                                    <h6>BEACH</h6>
                                    <p>We provide beach bags and towels for our guests.</p>
                                    <h6>RAIN</h6>
                                    <p>If it's raining, you can use the umbrellas provided in any wardrobe at the villa.</p>
                                    <h6>SAFETY</h6>
                                    <p>The villa meets the security requirements for rentals. The necessary equipment and instructions are installed: fire alarm, fire extinguisher, 
                                        first aid kit, rescue ring, indication of pool depth and pool rules. We have an official license to rent out the villa.
                                    </p>

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