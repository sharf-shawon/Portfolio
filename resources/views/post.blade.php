@extends('layouts.public')
@section('content')


<!-- container -->
<div class="container-fluid">

    <!-- row -->
    <div class="row p-30-0">

        <!-- col -->
        <div class="col-lg-12">

            <!-- section title -->
            <div class="art-section-title">
                <!-- title frame -->
                <div class="art-title-frame">
                    <!-- title -->
                    <h4>{{$data->title}}</h4>
                </div>
                <!-- title frame end -->
                <!-- right frame -->
                <div class="art-right-frame">
                    <div class="art-project-category">{{$data->category}}</div>
                </div>
                <!-- right frame end -->
            </div>
            <!-- section title end -->

        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-lg-12">

            <!-- project cover -->
            <div class="art-a art-project-cover">
                <!-- item frame -->
                <a data-fancybox="gallery" href="{{Voyager::image($data->image)}}"
                    class="art-portfolio-item-frame art-horizontal">
                    <!-- img -->
                    <img src="{{Voyager::image($data->image)}}" alt="item">
                    <!-- zoom icon -->
                    <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                </a>
                <!-- item end -->
            </div>
            <!-- project cover nd -->

        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-lg-8">

            <!-- post text -->
            <div class="art-a art-card">
                {!! $data->body !!}
            </div>
            <!-- post text end -->

        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-lg-4">

            <div class="art-a art-card">
                <!-- table -->
                <div class="art-table p-15-15">
                    <ul>
                        <li>
                            <h6>Date:</h6><span>{{date("M d, Y", strtotime($data->created_at))}}</span>
                        </li>
                        <li>
                            <h6>Author:</h6><span>{{$data->author}}</span>
                        </li>
                        <li>
                            <h6>Category:</h6><span>{{$data->category}}</span>
                        </li>
                    </ul>
                </div>
                <!-- table end -->
            </div>

        </div>
        <!-- col end -->

    </div>
    <!-- row end -->

</div>
<!-- container end -->

<!-- container -->
<div class="container-fluid">

    <!-- row -->
    <div class="row">

        <!-- col -->
        <div class="col-lg-12">

            <!-- pagination -->
            <div class="art-a art-pagination">
                <!-- button -->
                <a href="{{$data->prevPost ? url("blog/{$data->prevPost->id}") : "#"}}"
                    class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                        post</span></a>
                <div class="art-pagination-center art-m-hidden">
                    <a class="art-link" href="{{url("blog")}}">View All Posts</a>
                </div>
                <!-- button -->
                <a href="{{$data->nextPost ? url("blog/{$data->nextPost->id}") : "#"}}"
                    class="art-link art-color-link art-w-chevron"><span>Next post</span></a>
            </div>
            <!-- pagination end -->

        </div>
        <!-- col end -->

    </div>
    <!-- row end -->

</div>
<!-- container end -->
@include('inc.public.latest')
<!-- container -->
<div class="container-fluid">

    <!-- row -->
    <div class="row p-30-0">

        <!-- col -->
        <div class="col-lg-12">

            <!-- slider navigation -->
            <div class="art-slider-navigation">

                <!-- left side -->
                <div class="art-sn-left">

                    <!-- slider pagination -->
                    <div class="swiper-pagination"></div>

                </div>
                <!-- left side end -->

                <!-- right side -->
                <div class="art-sn-right">

                    <!-- slider navigation -->
                    <div class="art-slider-nav-frame">
                        <!-- prev -->
                        <div class="art-slider-nav art-blog-swiper-prev"><i class="fas fa-chevron-left"></i></div>
                        <!-- next -->
                        <div class="art-slider-nav art-blog-swiper-next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                    <!-- slider navigation -->

                </div>
                <!-- right side end -->

            </div>
            <!-- slider navigation end -->

        </div>
        <!-- col end -->

    </div>
    <!-- row end -->

</div>
<!-- container end -->

@endsection
