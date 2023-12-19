@extends('layouts.template2')

    @section('title')
    Gallery ที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Kor Samui)
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
                    <h2>Gallery</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing</p>
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
                        <li><a href="#" data-filter=".ground">HOTEL &amp; GROUND</a></li>
                        <li><a href="#" data-filter=".suite">ROOM/SUITE </a></li>
                        <li><a href="#" data-filter=".bathroom">BATHROOM</a></li>
                        <li><a href="#" data-filter=".dining">DINING</a></li>
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

                            <!-- ITEM -->
                            <div class="item-isotope suite dining">
                                <div class="gallery_item">
                                    <a href="{{ ('home/images/gallery/popup/img-1.jpg') }}" class="mfp-image" title="Luxury Room view all">
                                        <img src="{{ ('home/images/gallery/page/img-1.jpg') }}" alt="">
                                    </a>
                                    <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground bathroom suite">
                                <div class="gallery_item">
                                    <a href="{{ ('home/images/gallery/popup/img-1.jpg') }}" class="mfp-image" title="Luxury Room view all">
                                        <img src="{{ ('home/images/gallery/page/img-2.jpg') }}" alt="">
                                    </a>
                                    <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground bathroom dining">
                                <div class="gallery_item">
                                    <a href="{{ ('home/images/gallery/popup/img-1.jpg') }}" class="mfp-image" title="Luxury Room view all">
                                        <img src="{{ ('home/images/gallery/page/img-3.jpg') }}" alt="">
                                    </a>
                                    <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope suite dining ">
                                <div class="gallery_item">
                                    <a href="{{ ('home/images/gallery/popup/img-1.jpg') }}" class="mfp-image" title="Luxury Room view all">
                                        <img src="{{ ('home/images/gallery/page/img-4.jpg') }}" alt="">
                                    </a>
                                    <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground suite dining">
                                <div class="gallery_item">
                                    <a href="{{ ('home/images/gallery/popup/img-1.jpg') }}" class="mfp-image" title="Luxury Room view all">
                                        <img src="{{ ('home/images/gallery/page/img-5.jpg') }}" alt="">
                                    </a>
                                    <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom dining">
                                <div class="gallery_item">
                                    <a href="https://www.youtube.com/watch?v=RnjZ6IhkR40" target="_blank" class="mfp-iframe" title="Luxury Room view all">
                                        <img src="{{ ('home/images/gallery/page/img-6.jpg') }}" alt="">
                                    </a>
                                    <span class="icon"><i class="fa lotus-icon-media-play"></i></span>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground suite dining">
                                <div class="gallery_item">
                                    <a href="{{ ('home/images/gallery/popup/img-1.jpg') }}" class="mfp-image">
                                        <img src="{{ ('home/images/gallery/page/img-7.jpg') }}" alt="">
                                    </a>
                                    <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope bathroom suite dining">
                                <div class="gallery_item">
                                    <a href="{{ ('home/images/gallery/popup/img-1.jpg') }}" class="mfp-image" title="Luxury Room view all">
                                        <img src="{{ ('home/images/gallery/page/img-8.jpg') }}" alt="">
                                    </a>
                                    <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope bathroom suite dining">
                                <div class="gallery_item">
                                    <a href="https://www.youtube.com/watch?v=RnjZ6IhkR40" target="_blank" class="mfp-iframe" title="Luxury Room view all">
                                        <img src="{{ ('home/images/gallery/page/img-9.jpg') }}" alt="">
                                    </a>
                                    <span class="icon"><i class="fa lotus-icon-media-play"></i></span>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom">
                                <div class="gallery_item">
                                    <a href="{{ ('home/images/gallery/popup/img-1.jpg') }}" class="mfp-iframe">
                                        <img src="{{ ('home/images/gallery/page/img-10.jpg') }}" alt="">
                                    </a>
                                    <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground bathroom suite ">
                                <div class="gallery_item">
                                    <a href="{{ ('home/images/gallery/popup/img-1.jpg') }}" target="_blank" class="mfp-image">
                                        <img src="{{ ('home/images/gallery/page/img-11.jpg') }}" alt="">
                                    </a>
                                    <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground bathroom">
                                <div class="gallery_item">
                                    <a href="{{ ('home/images/gallery/popup/img-1.jpg') }}" class="mfp-image" title="Luxury Room view all">
                                        <img src="{{ ('home/images/gallery/page/img-12.jpg') }}" alt="">
                                    </a>
                                    <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground bathroom">
                                <div class="gallery_item">
                                    <a href="{{ ('home/images/gallery/popup/img-1.jpg') }}" class="mfp-image" title="Luxury Room view all">
                                        <img src="{{ ('home/images/gallery/page/img-13.jpg') }}" alt="">
                                    </a>
                                    <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground bathroom">
                                <div class="gallery_item">
                                    <a href="{{ ('home/images/gallery/popup/img-1.jpg') }}" class="mfp-image" title="Luxury Room view all">
                                        <img src="{{ ('home/images/gallery/page/img-14.jpg') }}" alt="">
                                    </a>
                                    <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground bathroom">
                                <div class="gallery_item">
                                    <a href="https://www.youtube.com/watch?v=RnjZ6IhkR40" target="_blank" class="mfp-iframe" title="Luxury Room view all">
                                        <img src="{{ ('home/images/gallery/page/img-15.jpg') }}" alt="">
                                    </a>
                                    <span class="icon"><i class="fa lotus-icon-media-play"></i></span>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground bathroom">
                                <div class="gallery_item">
                                    <a  href="{{ ('home/images/gallery/popup/img-1.jpg') }}" class="mfp-image" title="Luxury Room view all">
                                        <img src="{{ ('home/images/gallery/page/img-16.jpg') }}" alt="">
                                    </a>
                                    <h6 class="text">Lorem Ipsum is simply dummy text of the printing</h6>
                                </div>
                            </div>
                            <!-- END / ITEM -->

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