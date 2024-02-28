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

                            @if(isset($objs))
                            @foreach($objs as $u)
                            <!-- POST ITEM -->
                            <article class="post">

                                <div class="entry-media">
                                    <a href="{{ url('blog_detail/'.$u->id) }}" class="post-thumbnail hover-zoom"><img src="{{ url('images/malie/news/'.$u->image) }}" alt="{{ $u->title }}"></a>

                                    <span class="posted-on"><strong>{{ date('d', strtotime($u->created_at)) }}</strong>{{ date('M', strtotime($u->created_at)) }}</span>

                                </div>
                                
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="#">
                                        @if(session()->get('locale') == 'en')
                                            {{ $u->title_en }}
                                            @else
                                            {{ $u->title }}
                                            @endif
                                    </a></h2>
                                </div>

                                <div class="entry-content">
                                    <p>@if(session()->get('locale') == 'en')
                                        {{ $u->sub_title_en }}
                                        @else
                                        {{ $u->sub_title }}
                                        @endif</p>
                                </div>

                                <div class="entry-footer">
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

                            </article>
                            <!-- END / POST ITEM -->
                            @endforeach
                            @endif


                            <!-- PAGE NAVIGATION   -->
                            <div class="text-center">
                                @include('pagination.default', ['paginator' => $objs])
                            </div>
                            <!-- END / PAGE NAVIGATION   -->


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