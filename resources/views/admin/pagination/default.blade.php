@if ($paginator->hasPages())
<nav aria-label="...">
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="page-item page-item-prev-btn">
            <a href="javascript:void(0);" rel="prev" class="page-link">
                Trang trước
            </a>
        </li>
        @else
        <li class="page-item page-item-prev-btn">
            <a href="{{ $paginator->previousPageUrl() }}" class="page-link">
                Trang trước
            </a>
        </li>
        @endif
        @php
        $last = array_key_last($elements[0]);
        $first = array_key_first($elements[0]);
        @endphp
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
        @endif

        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage() && $page == $last && $last == 2)
        <li class="page-item"><a class="page-link" href="{{ $element[$page - 1] ?? '' }}">{{ $page - 1 ?? '' }}</a></li>
        <li class="page-item active" aria-current="page"><a href="javascript:void(0);" class="page-link">{{ $page ?? '' }}</a></li>
        @elseif($page == $paginator->currentPage() && $page == $first && $last == 2)
        <li class="page-item active" aria-current="page"><a href="javascript:void(0);" class="page-link">{{ $page ?? '' }}</a></li>
        <li class="page-item"><a class="page-link" href="{{ $element[$page + 1] ?? '' }}">{{ $page + 1 ?? '' }}</a></li>
        @elseif($page == $paginator->currentPage() && $page == $first)
        <li class="page-item active" aria-current="page"><a href="javascript:void(0);" class="page-link">{{ $page ?? '' }}</a></li>
        <li class="page-item"><a class="page-link" href="{{ $element[$page + 1] ?? '' }}">{{ $page + 1 ?? '' }}</a></li>
        <li class="page-item"><a class="page-link" href="{{ $element[$page + 2] ?? '' }}">{{ $page + 2 ?? '' }}</a></li>
        @elseif ($page == $paginator->currentPage() && $page == $last)
        <li class="page-item"><a class="page-link" href="{{ $element[$page - 2] ?? '' }}">{{ $page - 2 ?? '' }}</a></li>
        <li class="page-item"><a class="page-link" href="{{ $element[$page - 1] ?? '' }}">{{ $page - 1 ?? '' }}</a></li>
        <li class="page-item active" aria-current="page"><a href="javascript:void(0);" class="page-link">{{ $page ?? '' }}</a></li>
        @elseif ($page == $paginator->currentPage() && $page != $last && $page != $first)
        <li class="page-item"><a class="page-link" href="{{ $element[$page - 1] ?? '' }}">{{ $page - 1 ?? '' }}</a></li>
        <li class="page-item active" aria-current="page"><a href="javascript:void(0);" class="page-link">{{ $page ?? '' }}</a></li>
        <li class="page-item "><a class="page-link" href="{{ $element[$page + 1] ?? '' }}">{{ $page + 1 ?? '' }}</a>
        </li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item page-item-prev-btn">
            <a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next"
                aria-label="@lang('pagination.next')">
                Trang sau
            </a>
        </li>
        @else
        <li class="page-item page-item-prev-btn">
            <a href="javascript:void(0);" rel="next" class="page-link" aria-label="@lang('pagination.next')">
                Trang sau
            </a>
        </li>
        @endif
    </ul>
</nav>
@endif
