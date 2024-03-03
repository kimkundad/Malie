@extends('layouts.template2')

    @section('title')
    ห้องที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Koh Samui)
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
h3{
    line-height: 20px
}
.bg-9 {
    background-image: url({{ url('home/images/banner/bg_top_room.jpg') }});
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
                    <h2>OUR ROOMS</h2>
                </div>
                @else
                <div class="text text-center">
                    <h2>OUR ROOMS</h2>
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
                                    <div class="room_img-item"><a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ"></a></div>
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
                                    
                                    {!! get_room_en() !!}

                                </div>
                                @else
                                <div class="room-detail_overview">
                                    
                                    {!! get_room() !!}

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