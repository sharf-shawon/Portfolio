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
                    <h4>Blog</h4>
                </div>
                <!-- title frame end -->
            </div>
            <!-- section title end -->

        </div>
        <!-- col end -->
        @foreach ($data as $item)

        <!-- col -->
        <div class="col-lg-6">

            <!-- blog post card -->
            <div class="art-a art-blog-card">
                <!-- post cover -->
                <a href="{{url("blog/{$item->id}/".Str::slug($item->title))}}" class="art-port-cover">
                    <!-- img -->
                    <img src="{{Voyager::image($item->image)}}" alt="blog post">
                </a>
                <!-- post cover end -->
                <!-- post description -->
                <div class="art-post-description">
                    <!-- title -->
                    <a href="{{url("blog/{$item->id}/".Str::slug($item->title))}}">
                        <h5 class="mb-15">{{$item->title}}</h5>
                    </a>
                    <!-- text -->
                    <div class="mb-15">{!! $item->excerpt !!}</div>
                    <!-- link -->
                    <a href="{{url("blog/{$item->id}/".Str::slug($item->title))}}"
                        class="art-link art-color-link art-w-chevron">Read more</a>
                </div>
                <!-- post description end -->
            </div>
            <!-- blog post card end -->

        </div>
        <!-- col end -->
        @endforeach

    </div>
    <!-- row end -->

</div>
<!-- container end -->

{{$data->links()}}

@endsection
