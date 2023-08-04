@if ($paginator->hasPages())
    <ul class="pagination">
        @if ($paginator->onFirstPage())
            <li class="paginate_button page-itemdisabled"><a class="page-link">← Previous</a></li>
        @else
            <li class="paginate_button page-item previous "><a class="page-link" href="{{ $paginator->previousPageUrl() }}"
                    rel="prev">← Previous</a></li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="paginate_button page-item disabled"><a class="page-link">{{ $element }}</a></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="paginate_button page-item active my-active"><a
                                class="page-link active">{{ $page }}</a></li>
                    @else
                        <li><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="paginate_button page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"
                    rel="next">Next →</a></li>
        @else
            <li class="paginate_button page-itemdisabled"><a class="page-link">Next →</a></li>
        @endif
    </ul>
@endif
