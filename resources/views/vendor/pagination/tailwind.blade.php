@if ($paginator->hasPages())
<nav class="woocommerce-pagination padding-top-30">
    <ul class="page-numbers pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <!-- <li class="page-item disabled"><a class="link-page">Prev</a></li> -->
        @else
        <li><a href="{{ $paginator->previousPageUrl() }}" class="link-page next"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
            <!-- <li class="page-item"><a class="link-page" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-chevron-left"></i> </a></li> -->
            <!-- <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a> -->
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><a  href="#"><span>{{ $element }}</span></a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a class="current" href="{{ $url }}"><span class="current">{{ $page }}</span></a></li>
                    @else
                        <li><a class="link-page" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <!-- <li><a class="link-page" href="{{ $paginator->nextPageUrl() }}" class="Next"> Next <i class="fa fa-chevron-right"></i></a></li> -->
            <li><a href="{{ $paginator->nextPageUrl() }}" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        @else
            <!-- <li><a class="link-page" href="#">Next</a></li> -->
        @endif
    </ul>
</nav>
@endif
