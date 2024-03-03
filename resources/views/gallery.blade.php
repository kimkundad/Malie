@extends('layouts.template2')

    @section('title')
    Gallery ที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Koh Samui)
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
.bg-9 {
    background-image: url({{ url('home/images/banner/bg_top_gallery.jpg') }});
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
                    <h2>Gallery</h2>
                    {{-- @if(session()->get('locale') == 'en')
                    <p>Gallery of The Bay Ridge (Villa 2)</p>
                    @else
                    <p>คลังรูปภาพของ The Bay Ridge (Villa 2)</p>
                    @endif --}}
                </div>
            </div>
        </div>
    </section>
    <!-- END / SUB BANNER -->

     <!-- GALLERY -->
     <section class="section_page-gallery">
        <div class="container">
            <div class="gallery">

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
                <div class="gallery-content">
                    <div class="row">
                        <div class="gallery-isotope col-4">

                            <!-- ITEM SIZE -->
                            <div class="item-size "></div>
                            <!-- END / ITEM SIZE -->

                           

                            @if(isset($images))
                            @foreach($images as $item)
                                <div class="item-isotope {{ $item->cat_name }} ">
                                    <div class="gallery_item">
                                        <a  href="{{ url('images/malie/gallery/'.$item->image) }}" class="gallery-popup mfp-image" title="{{ $item->cat_name }}">
                                            <img src="{{ url('images/malie/gallery/'.$item->image) }}" alt="{{ $item->cat_name }}">
                                        </a>
                                        @if(session()->get('locale') == 'en')
                                        <h6 class="text">{{ $item->detail_en }}</h6>
                                        @else
                                        <h6 class="text">{{ $item->detail }}</h6>
                                        @endif
                                        
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                            @endforeach
                        @endif

                        </div>
                    </div>

                </div>
                <!-- GALLERY CONTENT -->

            </div>
        </div>       
    </section>
    <!-- END / GALLERY -->
    


    @endsection

    @section('scripts')
    
        <script>
    
        </script>
    
    @stop('scripts')