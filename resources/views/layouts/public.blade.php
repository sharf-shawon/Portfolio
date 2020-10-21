<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146228868-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-146228868-2');
    </script>

    <title>{{$data->title ?? setting("site.title")}}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('inc.public.meta')

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
