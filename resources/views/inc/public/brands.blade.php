<!-- container -->
<div class="container-fluid">

    <!-- row -->
    <div class="row">

        @foreach (App\Framework::where('active', true)->get() as $item)
        <div class="col-6 col-lg-3">
            <!-- brand -->
            <img class="art-brand" src="{{Voyager::image($item->image)}}" alt="{{$item->name}}">
        </div>
        @endforeach
        <!-- col end -->

    </div>
    <!-- row end -->

</div>
<!-- container end -->
