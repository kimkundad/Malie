@extends('layouts.template2')

    @section('title')
    ข่าวสารของที่พักพูลวิลล่า Malie เกาะสมุย (Villa Malie Koh Samui)
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
        <div class="sub-banner">
            <div class="container">
                <div class="text text-center">
                    @if(session()->get('locale') == 'en')
                        <h2>Our BLOG</h2>
                    @else
                        <h2>กิจกรรม & ประชาสัมพันธ์</h2>
                    @endif
                </div>
            </div>

        </div>

    </section>
    <!-- END / SUB BANNER -->


    <!-- BLOG -->
    <section class="section-blog bg-white">
        <div class="container">
            <div class="blog">
                <div class="row">
                    <h1 class="element-invisible">Blog</h1>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="blog-content">
                            <h1 class="element-invisible">Blog detail</h1>
                            <!-- POST SINGLE -->
                            <article class="post post-single">

                                <div class="entry-media">
                                    <img src="{{ url('images/malie/news/'.$u->image) }}" alt="{{ $u->title }}">
                                    <span class="posted-on"><strong>{{ date('d', strtotime($u->created_at)) }}</strong>{{ date('M', strtotime($u->created_at)) }}</span>
                                </div>
                                
                                <div class="entry-header">

                                    <h2 class="entry-title">
                                        @if(session()->get('locale') == 'en')
                                            {{ $u->title_en }}
                                            @else
                                            {{ $u->title }}
                                            @endif
                                    </h2>

                                    <p class="entry-meta">

                                        <span class="posted-on">
                                            <span class="screen-reader-text">Posted on</span>
                                            <span class="entry-time">{{ $u->created_at }}</span>
                                        </span>
            
                                        <span class="entry-author">
                                            <span class="screen-reader-text">Posted by </span>
                                            <a href="#" class="entry-author-link">
                                                <span class="entry-author-name">Admin</span>
                                            </a>
                                        </span>

                                        
                                    </p>

                                </div>

                                <div class="entry-content">


                                        @if(session()->get('locale') == 'en')
                                        {!! $u->detail_en !!}
                                        @else
                                        {!! $u->detail !!}
                                        @endif

                                </div>

                            </article>
                            <!-- END / POST SINGLE -->

                        </div>
                    </div> 

                   

                </div>
            </div>
        </div>
    </section>
    <!-- END / BLOG -->

    @endsection

    @section('scripts')
    
        <script>
    
        </script>
    
    @stop('scripts')