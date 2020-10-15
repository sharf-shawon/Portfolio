<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>

    <title>{{$data->title ?? setting("site.title")}}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="{{$data->title ?? setting('site.title')}}">
    <meta name="keywords" content="{{$data->metatags ?? setting('site.metatags')}}">
    <meta name="description" content="{{$data->metadescription ?? setting('site.description')}}">
    <meta property="og:title" content="{{$data->title ?? setting('site.title')}}">
    <meta property="og:description" content="{{$data->metadescription ?? setting('site.description')}}">
    <meta property="og:image" content="{{Voyager::image($data->image ?? setting("site.shareImage"))}}">
    <meta property="og:url" content="{{Request::url()}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:site_name" content="{{setting('site.name')}}">
    <meta name="twitter:image:alt" content="{{setting('site.description')}}">
    <meta property="fb:app_id" content="{{config('services.facebook.client_id')}}" />
    <meta name="twitter:site" content="{{setting('site.twitter')}}">
    <meta name="theme-color" content="#2B2B35">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset("favicons/ms-icon-144x144.png")}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset("favicons/apple-icon-57x57.png")}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset("favicons/apple-icon-60x60.png")}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset("favicons/apple-icon-72x72.png")}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset("favicons/apple-icon-76x76.png")}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset("favicons/apple-icon-114x114.png")}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset("favicons/apple-icon-120x120.png")}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset("favicons/apple-icon-144x144.png")}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset("favicons/apple-icon-152x152.png")}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("favicons/apple-icon-180x180.png")}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset("favicons/android-icon-192x192.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("favicons/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset("favicons/favicon-96x96.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("favicons/favicon-16x16.png")}}">
    <link rel="manifest" href="{{asset("favicons/manifest.json")}}">

    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    @stack('styles')
</head>

<body>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v8.0'
        });
      };

      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="109067674101893" theme_color="#FFC107"
        logged_in_greeting="Hello! Welcome to my website!" logged_out_greeting="Hello! Welcome to my website!">
    </div>
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
                    <div class="art-top-bg" style="background-image: url(img/bg.gif)">
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
    <!-- app end -->    <script src="{{asset("js/main.js")}}"></script>
    @stack('scripts')
</body>

</html>
