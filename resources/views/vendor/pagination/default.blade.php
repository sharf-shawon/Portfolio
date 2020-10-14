@if ($paginator->hasPages())
<!-- container -->
<div class="container-fluid">

    <!-- row -->
    <div class="row pb-3">

        <!-- col -->
        <div class="col-lg-12">

            <!-- pagination -->
            <div class="art-a art-pagination">
                <!-- button -->
                @if ($paginator->onFirstPage())
                <a href="#" class="art-link art-color-link art-w-chevron art-left-link disabled"><span>Previous
                        page</span></a>
                @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="art-link art-color-link art-w-chevron art-left-link"><span>Previous page</span></a>
                @endif
                <div class="art-pagination-center art-m-hidden">

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <a class="disabled" href="#">{{ $element }}</a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <a class="art-active-pag" href="#">{{ $page }}</a>
                @else
                <a href="{{ $url }}">{{ $page }}</a>
                @endif
                @endforeach
                @endif
                @endforeach
                </div>
                @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="art-link art-color-link art-w-chevron"><span>Next page</span></a>
                @else
                <a href="#" class="art-link art-color-link art-w-chevron disabled"><span>Next page</span></a>
                @endif
                <!-- button -->
            </div>
            <!-- pagination end -->

        </div>
        <!-- col end -->

    </div>
    <!-- row end -->

</div>
<!-- container end -->

@endif
