@extends('layouts.public')
@section('content')

<!-- swup container -->
<div class="transition-fade" id="swup">

    <!-- scroll frame -->
    <div id="scrollbar" class="art-scroll-frame">

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row p-30-0">

                <!-- col -->
                <div class="col-lg-12">

                    <!-- filter -->
                    <div class="art-filter mb-30">
                        <!-- filter link -->
                        <a href="#" data-filter="*" class="art-link art-current">All Categories</a>
                        @foreach (App\Portfolio::where('active', true)->groupBy('category')->pluck('category') as $item)
                        <!-- filter link -->
                        <a href="#" data-filter=".{{Str::slug($item)}}" class="art-link">{{$item}}</a>
                        @endforeach
                    </div>
                    <!-- filter end -->

                </div>
                <!-- col end -->

                <div class="art-grid art-grid-2-col art-gallery">

                    @foreach (App\Portfolio::where('active', true)->orderBy('date', 'desc')->get() as $item)
                    <!-- grid item -->
                    <div class="art-grid-item {{Str::slug($item->category)}}">
                        <!-- grid item frame -->
                        <a data-fancybox="gallery" href="/storage/portfolios/October2020/IbNiCrqBT61DBPlm0zZs.jpg"
                            class="art-a art-portfolio-item-frame art-horizontal">
                            <!-- img -->
                            <img src="{{Voyager::image($item->image)}}" alt="item">
                            <!-- zoom icon -->
                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                        </a>
                        <!-- grid item frame end -->
                        <!-- description -->
                        <div class="art-item-description p-3">
                            <!-- title -->
                            <h5 class="mb-3">{{$item->title}}</h5>
                            <div class="m-0 p-0">
                                <div class="art-a art-card">
                                    <!-- table -->
                                    <div class="art-table m-0 p-0">
                                        <ul>
                                            <li>
                                                <h6>Client:</h6><span>{{$item->company}}</span>
                                            </li>
                                            <li>
                                                <h6>Order Date:</h6>
                                                <span>{{date("M, Y", strtotime($item->date))}}</span>
                                            </li>
                                            <li>
                                                <h6>Status:</h6><span>{{$item->status}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- table end -->
                                </div>
                            </div>
                        </div>
                        <!-- description end -->
                    </div>
                    <!-- grid item end -->
                    @endforeach
                </div>

            </div>
            <!-- row end -->

        </div>
        <!-- container end -->

    </div>
</div>
@include('inc.public.recommendations')

@endsection
