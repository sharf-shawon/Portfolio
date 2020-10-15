@extends('layouts.public')
@section('content')

<!-- container -->
<div class="container-fluid">

    <!-- row -->
    <div class="row p-60-0 p-lg-30-0 p-md-15-0">
        <!-- col -->
        <div class="col-lg-12">

            <!-- banner -->
            <div class="art-a art-banner" style="background-image: url(img/bg.gif)">
                <!-- banner back -->
                <div class="art-banner-back"></div>
                <!-- banner dec -->
                <div class="art-banner-dec"></div>
                <!-- banner overlay -->
                <div class="art-banner-overlay">
                    <!-- main title -->
                    <div class="art-banner-title">
                        <!-- title -->
                        <h1 class="mb-15">{{ setting("site.headerText") }}</h1>
                        <!-- suptitle -->
                        <div class="art-lg-text art-code mb-25">&lt;<i>code</i>&gt; I Love
                            <span class="txt-rotate" data-period="2000"
                                data-rotate='{{setting('site.moving')}}'></span>&lt;/<i>code</i>&gt;
                        </div>
                        <div class="art-buttons-frame">
                            <!-- button -->
                            <a href="{{hideConf(setting("site.ctaLink"))}}"
                                class="art-btn art-btn-md"><span>{{setting("site.ctaText")}}</span></a>
                        </div>
                    </div>
                    <!-- main title end -->
                    <!-- photo -->
                    <img src="{{Voyager::image(setting("site.headerImage"))}}" class="art-banner-photo"
                        alt="{{setting("site.name")}}">
                </div>
                <!-- banner overlay end -->
            </div>
            <!-- banner end -->

        </div>
        <!-- col end -->
    </div>
    <!-- row end -->

</div>
<!-- container end -->

<!-- container -->
<div class="container-fluid">
    <!-- row -->
    <div class="row p-30-0">
        <div class="col-md-12">
            <div class="art-a art-service-icon-box">
                <!-- service content -->
                <div class="art-service-ib-content">
                    <!-- title -->
                    <h5 class="mb-15">About Me</h5>
                    <!-- text -->
                    <div class="mb-15 text-white">
                        {!! setting('site.about') !!}
                    </div>
                    <!-- button -->
                </div>
                <!-- service content end -->
            </div>

        </div>
    </div>
</div>
<!-- container end -->

<div class="container-fluid text-center">

    <!-- row -->
    <div class="row p-20-0">

        <!-- col -->
        <div class="col-md-3 col-6">

            <!-- couner frame -->
            <div class="art-counter-frame">
                <!-- counter -->
                <div class="art-counter-box">
                    <!-- counter number -->
                    <span class="art-counter">{{setting("site.experience")}}</span><span
                        class="art-counter-plus">+</span>
                </div>
                <!-- counter end -->
                <!-- title -->
                <h6>Years Experience</h6>
            </div>
            <!-- couner frame end -->

        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-md-3 col-6">

            <!-- couner frame -->
            <div class="art-counter-frame">
                <!-- counter -->
                <div class="art-counter-box">
                    <!-- counter number -->
                    <span class="art-counter">{{setting("site.projects")}}</span>
                </div>
                <!-- counter end -->
                <!-- title -->
                <h6>Completed Projects</h6>
            </div>
            <!-- couner frame end -->

        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-md-3 col-6">

            <!-- couner frame -->
            <div class="art-counter-frame">
                <!-- counter -->
                <div class="art-counter-box">
                    <!-- counter number -->
                    <span class="art-counter">{{setting("site.clients")}}</span>
                </div>
                <!-- counter end -->
                <!-- title -->
                <h6>Happy Clients</h6>
            </div>
            <!-- couner frame end -->

        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-md-3 col-6">

            <!-- couner frame -->
            <div class="art-counter-frame">
                <!-- counter -->
                <div class="art-counter-box">
                    <!-- counter number -->
                    <span class="art-counter">{{setting("site.achievements")}}</span><span
                        class="art-counter-plus">+</span>
                </div>
                <!-- counter end -->
                <!-- title -->
                <h6>Achievements</h6>
            </div>
            <!-- couner frame end -->

        </div>
        <!-- col end -->

    </div>
    <!-- row end -->

</div>
<!-- container end -->
@include('inc.public.hobbies')
@include('inc.public.recommendations')
@include('inc.public.brands')

@endsection
