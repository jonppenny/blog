@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between">
        <div class="d-flex justify-content-between flex-fill">
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <a class="d-inline-block my-2 text-uppercase bios-link" href="{{ $paginator->previousPageUrl() }}"
                   rel="prev">@lang('previous')</a>
            @else
                <span>&nbsp;</span>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="d-inline-block my-2 text-uppercase bios-link" href="{{ $paginator->nextPageUrl() }}"
                   rel="next">@lang('next')</a>
            @endif
        </div>
    </nav>
@endif
