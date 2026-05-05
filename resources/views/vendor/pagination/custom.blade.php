<style>

</style>
@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="page-item disabled" style="margin-right:8px">
            <span class="page-link" aria-hidden="true">
                <i class="fa-solid fa-angle-left"></i>
            </span>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                <i class="fa-solid fa-angle-left"></i>
            </a>
        </li>
        @endif


        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item"><a class="page-link active" href="#">{{ $page }}</a></li>
        @else
        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                <i class="fa-solid fa-angle-right"></i>
            </a>
        </li>
        @else
        <li class="page-item disabled">
            <span class="page-link" aria-hidden="true">
                <i class="fa-solid fa-angle-right"></i>
            </span>
        </li>
        @endif
    </ul>
</nav>
@endif