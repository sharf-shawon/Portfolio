<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- color of address bar in mobile browser -->
    <meta name="theme-color" content="#2B2B35">
    <!-- favicon  -->
    <link rel="shortcut icon" href="{{asset("img/thumbnail.ico")}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset("css/plugins/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/plugins/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/plugins/swiper.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/plugins/fancybox.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    @stack('styles')
    <title>{{setting("site.title")}}</title>
</head>

<body>

    <!-- app -->
    <div class="art-app">

        <!-- mobile top bar -->
        <div class="art-mobile-top-bar"></div>

        <!-- app wrapper -->
        <div class="art-app-wrapper">

            <!-- app container end -->
            <div class="art-app-container">
                @include('inc.public.sidebar')
                <!-- content -->
                <div class="art-content">

                    <!-- curtain -->
                    <div class="art-curtain"></div>

                    <!-- top background -->
                    <div class="art-top-bg" style="background-image: url(img/bg.jpg)">
                        <!-- overlay -->
                        <div class="art-top-bg-overlay"></div>
                        <!-- overlay end -->
                    </div>
                    <!-- top background end -->

                    <!-- swup container -->
                    <div class="transition-fade" id="swup">

                        <!-- scroll frame -->
                        <div id="scrollbar" class="art-scroll-frame">
                            @yield('content')
                            <!-- container -->
                            <div class="container-fluid">

                                <!-- footer -->
                                <footer>
                                    <!-- copyright -->
                                    <div>© {{date("Y")}} {{setting("site.name")}}</div>
                                    <div>All Rights Reserved.</div>
                                </footer>
                                <!-- footer end -->

                            </div>
                            <!-- container end -->

                        </div>
                        <!-- scroll frame end -->

                    </div>
                    <!-- swup container end -->

                </div>
                <!-- content end -->
                @include('inc.public.menu')
            </div>
            <!-- app container end -->

        </div>
        <!-- app wrapper end -->

        <!-- preloader -->
        <div class="art-preloader">
            <!-- preloader content -->
            <div class="art-preloader-content">
                <!-- title -->
                <h4>{{setting("site.name")}}</h4>
                <!-- progressbar -->
                <div id="preloader" class="art-preloader-load"></div>
            </div>
            <!-- preloader content end -->
        </div>
        <!-- preloader end -->

    </div>
    <!-- app end -->
    <script src="{{asset("js/plugins/jquery.min.js")}}"></script>
    <script src="{{asset("js/plugins/anime.min.js")}}"></script>
    <script src="{{asset("js/plugins/swiper.min.js")}}"></script>
    <script src="{{asset("js/plugins/progressbar.min.js")}}"></script>
    <script src="{{asset("js/plugins/smooth-scrollbar.min.js")}}"></script>
    <script src="{{asset("js/plugins/overscroll.min.js")}}"></script>
    <script src="{{asset("js/plugins/typing.min.js")}}"></script>
    <script src="{{asset("js/plugins/isotope.min.js")}}"></script>
    <script src="{{asset("js/plugins/fancybox.min.js")}}"></script>
    <script src="{{asset("js/plugins/swup.min.js")}}"></script>
    <script src="{{asset("js/main.js")}}"></script>
    @stack('scripts')
</body>

</html>
