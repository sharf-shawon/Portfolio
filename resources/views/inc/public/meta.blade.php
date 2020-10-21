<meta name="title" content="{{$data->title ?? setting('site.title')}}">
<meta name="keywords" content="{{$data->metatags ?? setting('site.metatags')}}">
<meta name="description" content="{{getMetaDescription($data ?? null)}}">
<meta property="og:title" content="{{$data->title ?? setting('site.title')}}">
<meta property="og:description" content="{{getMetaDescription($data ?? null)}}">
<meta property="og:type" content="website" />
<meta property="og:image" content="{{Voyager::image($data->image ?? setting("site.shareImage"))}}">
<meta property="og:url" content="{{Request::url()}}">
<meta name="twitter:card" content="summary_large_image">
<meta property="og:site_name" content="{{setting('site.name')}}">
<meta name="twitter:image:alt" content="{{getMetaDescription($data ?? null)}}">
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
