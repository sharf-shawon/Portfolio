<!-- container -->
<div class="container-fluid">

    <!-- row -->
    <div class="row">

        <!-- col -->
        <div class="col-lg-12">

            <!-- section title -->
            <div class="art-section-title">
                <!-- title frame -->
                <div class="art-title-frame">
                    <!-- title -->
                    <h4>Recommendations</h4>
                </div>
                <!-- title frame end -->
            </div>
            <!-- section title end -->

        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-lg-12">

            <!-- slider container -->
            <div class="swiper-container art-testimonial-slider" style="overflow: visible">
                <!-- slider wrapper -->
                <div class="swiper-wrapper">
                    @foreach (App\Recommendation::where('active', true)->get() as $item)
                    <!-- slide -->
                    <div class="swiper-slide">

                        <!-- testimonial -->
                        <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                                <!-- photo -->
                                <img class="art-testimonial-face" src="{{Voyager::image($item->image)}}" alt="face">
                                <!-- name -->
                                <h5>{{$item->name}}</h5>
                                <div class="art-el-suptitle mb-15">{{$item->company}}</div>
                                <!-- text -->
                                <div class="mb-15">{!! $item->content !!}</div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                                <div class="art-left-side">
                                    <!-- star rate -->
                                    <ul class="art-star-rate">
                                        @for ($i = 1; $i <= 5; $i++)
                                        <li class="{{($i > $item->rating) ? 'art-empty-item' : ''}}" ><i class="fas fa-star"></i></li>
                                        @endfor
                                    </ul>
                                    <!-- star rate end -->
                                </div>
                                <div class="art-right-side">

                                </div>
                            </div>
                            <!-- testimonial footer end -->
                        </div>
                        <!-- testimonial end -->

                    </div>
                    <!-- slide end -->
                    @endforeach

                </div>
                <!-- slider wrapper end -->
            </div>
            <!-- slider container end -->

        </div>
        <!-- col end -->

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
                        <div class="art-slider-nav art-testi-swiper-prev"><i class="fas fa-chevron-left"></i></div>
                        <!-- next -->
                        <div class="art-slider-nav art-testi-swiper-next"><i class="fas fa-chevron-right"></i></div>
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
