@extends('layouts.public')
@section('content')


<!-- container -->
<div class="container-fluid">

    <!-- row -->
    <div class="row p-30-0">

        <!-- col -->
        <div class="col-lg-6">

            <!-- section title -->
            <div class="art-section-title">
                <!-- title frame -->
                <div class="art-title-frame">
                    <!-- title -->
                    <h4>Education</h4>
                </div>
                <!-- title frame end -->
            </div>
            <!-- section title end -->

            <!-- timeline -->
            <div class="art-timeline art-gallery">

                @foreach (App\History::where('category', 'education')->where('active', true)->get() as $item)
                <div class="art-timeline-item">
                    <div class="art-timeline-mark-light"></div>
                    <div class="art-timeline-mark"></div>

                    <div class="art-a art-timeline-content">
                        <div class="art-card-header">
                            <div class="art-left-side">
                                <h5>{{$item->institution}}</h5>
                                <div class="art-el-suptitle mb-15">{{$item->position}}</div>
                            </div>
                            <div class="art-right-side">
                                <span class="art-date">{{date("M, Y", strtotime($item->start))}} -
                                    {{$item->end ? date("M, Y", strtotime($item->end)) : "Present"}}</span>
                            </div>
                        </div>
                        <p>{!! $item->description !!}</p>
                        @if ($item->recommendation_id)
                        <a data-fancybox="recommendation" href="#art-recomendation-popup-{{$item->id}}"
                            class="art-link art-color-link art-w-chevron">Testimonial</a>
                        @endif
                    </div>
                </div>
                @if ($item->recommendation_id)
                <?php $recommendation = App\recommendation::find($item->recommendation_id); ?>
                <!-- popup -->
                <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-{{$item->id}}">

                    <!-- testimonial -->
                    <div class="art-a art-testimonial">
                        <!-- testimonial body -->
                        <div class="testimonial-body">
                            <!-- photo -->
                            <img class="art-testimonial-face" src="{{Voyager::image($recommendation->image)}}"
                                alt="face">
                            <!-- name -->
                            <h5>{{$recommendation->name}}</h5>
                            <div class="art-el-suptitle mb-15">{{$item->institution}}</div>
                            <!-- text -->
                            <div class="mb-15">{!! $recommendation->content !!}</div>
                        </div>
                        <!-- testimonial body end -->
                        <!-- testimonial footer -->
                        <div class="art-testimonial-footer">
                            <div class="art-left-side">
                                <!-- star rate -->
                                <ul class="art-star-rate">
                                    @for ($i = 1; $i <= 5; $i++) <li
                                        class="{{($i > $recommendation->rating) ? 'art-empty-item' : ''}}"><i
                                            class="fas fa-star"></i></li>
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
                <!-- popup end -->
                @endif

                @endforeach

            </div>
            <!-- timeline end -->

        </div>
        <div class="col-lg-6">

            <!-- section title -->
            <div class="art-section-title">
                <!-- title frame -->
                <div class="art-title-frame">
                    <!-- title -->
                    <h4>Work History</h4>
                </div>
                <!-- title frame end -->
            </div>
            <!-- section title end -->

            <!-- timeline -->
            <div class="art-timeline">

                @foreach (App\History::where('category', 'work')->where('active', true)->get() as $item)
                <div class="art-timeline-item">
                    <div class="art-timeline-mark-light"></div>
                    <div class="art-timeline-mark"></div>

                    <div class="art-a art-timeline-content">
                        <div class="art-card-header">
                            <div class="art-left-side">
                                <h5>{{$item->institution}}</h5>
                                <div class="art-el-suptitle mb-15">{{$item->position}}</div>
                            </div>
                            <div class="art-right-side">
                                <span class="art-date">{{date("M, Y", strtotime($item->start))}} -
                                    {{$item->end ? date("M, Y", strtotime($item->end)) : "Present"}}</span>
                            </div>
                        </div>
                        <p>{!! $item->description !!}</p>
                        @if ($item->recommendation_id)
                        <a data-fancybox="recommendation" href="#art-recomendation-popup-{{$item->id}}"
                            class="art-link art-color-link art-w-chevron">Testimonial</a>
                        @endif
                    </div>
                </div>
                @if ($item->recommendation_id)
                <?php $recommendation = App\recommendation::find($item->recommendation_id); ?>
                <!-- popup -->
                <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-{{$item->id}}">

                    <!-- testimonial -->
                    <div class="art-a art-testimonial">
                        <!-- testimonial body -->
                        <div class="testimonial-body">
                            <!-- photo -->
                            <img class="art-testimonial-face" src="{{Voyager::image($recommendation->image)}}"
                                alt="face">
                            <!-- name -->
                            <h5>{{$recommendation->name}}</h5>
                            <div class="art-el-suptitle mb-15">{{$item->institution}}</div>
                            <!-- text -->
                            <div class="mb-15">{!! $recommendation->content !!}</div>
                        </div>
                        <!-- testimonial body end -->
                        <!-- testimonial footer -->
                        <div class="art-testimonial-footer">
                            <div class="art-left-side">
                                <!-- star rate -->
                                <ul class="art-star-rate">
                                    @for ($i = 1; $i <= 5; $i++) <li
                                        class="{{($i > $recommendation->rating) ? 'art-empty-item' : ''}}"><i
                                            class="fas fa-star"></i></li>
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
                <!-- popup end -->
                @endif

                @endforeach

            </div>
            <!-- timeline end -->

        </div>
        <!-- col end -->

    </div>
    <!-- row end -->

</div>
<!-- container end -->

@include('inc.public.brands')

@endsection
