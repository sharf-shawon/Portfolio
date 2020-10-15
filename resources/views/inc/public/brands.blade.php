@if (App\Framework::where('active', true)->count())
<!-- container -->
<div class="container-fluid">

    <!-- col -->
    <div class="col-lg-12">

        <!-- section title -->
        <div class="art-section-title">
            <!-- title frame -->
            <div class="art-title-frame">
                <!-- title -->
                <h4>Frameworks I am best at</h4>
            </div>
            <!-- title frame end -->
        </div>
        <!-- section title end -->

    </div>
    <!-- col end -->

    <!-- row -->
    <div class="row">

        @foreach (App\Framework::where('active', true)->get() as $item)
        <div class="col-4 col-lg-2">
            <!-- brand -->
            <img class="art-brand" src="{{Voyager::image($item->image)}}" alt="{{$item->name}}">
        </div>
        @endforeach
        <!-- col end -->

    </div>
    <!-- row end -->

</div>
<!-- container end -->
@endif
