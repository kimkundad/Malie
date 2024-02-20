<ul class="page-navigation">
    <li class="first"><a href="{{ $paginator->url(1) }}" ><i class="fa fa-arrow-left"></i></a></li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
    <li class="{{ ($paginator->currentPage() == $i) ? ' current-page' : '' }}"><a href="{{ $paginator->url($i) }}" >{{ $i }}</a></li>
    @endfor
    <li class="last"><a href="{{ $paginator->url($paginator->currentPage()+1) }}"  ><i class="fa fa-arrow-right"></i></a></li>
</ul>

{{-- <ul class="page-navigation">
    <li class="first"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
    <li><a href="#">1</a></li>
    <li class="current-page"><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>
    <li class="last"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
</ul> --}}