@if ($paginator->hasPages())
    <div class="pagination clearfix">

        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="prev disabled"><a href="#" onclick="return false;">Previous</a></li>

            @else
                <li class="prev"><a href="{{ $paginator->previousPageUrl() }}" >Previous</a></li>

            @endif


            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled">{{ $element }}</li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a href="#">{{ $page }}</a></li>
                        @else
                            <li class="waves-effect"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach




            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="next"><a href="{{ $paginator->nextPageUrl() }}">Next</a></li>

            @else
                <li class="next disabled"><a href="#">Next</a></li>
            @endif





        </ul>

    </div>
@endif