@if (App\Post::where('active', true)->orderBy('created_at', 'desc')->take(5)->count())
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
                    <h4>Checkout My Latest Posts</h4>
                </div>
                <!-- title frame end -->
            </div>
            <!-- section title end -->

        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-lg-12">

            <!-- slider container -->
            <div class="swiper-container art-blog-slider" style="overflow: visible">
                <!-- slider wrapper -->
                <div class="swiper-wrapper">
                    @foreach (App\Post::where('active', true)->orderBy('created_at', 'desc')->take(5)->get() as $item)

                    <!-- slide -->
                    <div class="swiper-slide">

                        <!-- blog post card -->
                        <div class="art-a art-blog-card">
                            <!-- post cover -->
                            <a href="{{url("/blog/{$item->id}")}}" class="art-port-cover">
                                <!-- img -->
                                <img src="{{Voyager::image($item->image)}}" alt="blog post">
                            </a>
                            <!-- post cover end -->
                            <!-- post description -->
                            <div class="art-post-description">
                                <!-- title -->
                                <a href="{{url("blog/{$item->id}")}}">
                                    <h5 class="mb-15">{{$item->title}}</h5>
                                </a>
                                <!-- text -->
                                <div class="mb-15">{!! $item->excerpt !!}</div>
                                <!-- link -->
                                <a href="{{url("blog/{$item->id}")}}" class="art-link art-color-link art-w-chevron">Read
                                    more</a>
                            </div>
                            <!-- post description end -->
                        </div>
                        <!-- blog post card end -->

                    </div>
                    <!-- slide end -->
                    @endforeach

                </div>
                <!-- slider wrapper end -->
            </div>
            <!-- slider container end -->

        </div>
        <!-- col end -->
    </div>
</div>
<!-- end container -->
@endif
