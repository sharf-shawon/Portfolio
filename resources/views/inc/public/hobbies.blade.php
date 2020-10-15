@if (App\Hobby::where('active', true)->count() > 0)
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
                    <h4>My Hobbies</h4>
                </div>
                <!-- title frame end -->
            </div>
            <!-- section title end -->

        </div>
        <!-- col end -->
        @foreach (App\Hobby::where('active', true)->inRandomOrder()->limit(3)->get() as $item)

        <!-- col -->
        <div class="col-lg-4 col-md-6">

            <!-- service -->
            <div class="art-a art-service-icon-box">
                <!-- service content -->
                <div class="art-service-ib-content">
                    <!-- title -->
                    <h5 class="mb-15">{{$item->title}}</h5>
                    <!-- text -->
                    <div class="mb-15">{!! $item->description !!}</div>
                </div>
                <!-- service content end -->
            </div>
            <!-- service end -->

        </div>
        <!-- col end -->
        @endforeach

    </div>
    <!-- row end -->

</div>
<!-- container end -->
@endif

{{--
<!-- container -->
<div class="container-fluid">

    <!-- row -->
    <div class="row p-0-0">

        <!-- col -->
        <div class="col-lg-12">

            <!-- section title -->
            <div class="art-section-title">
                <!-- title frame -->
                <div class="art-title-frame">
                    <!-- title -->
                    <h4>Price Plans</h4>
                </div>
                <!-- title frame end -->
            </div>
            <!-- section title end -->

        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-lg-4">

            <!-- price -->
            <div class="art-a art-price">
                <!-- price body -->
                <div class="art-price-body">
                    <h5 class="mb-30">Starter Price</h5>
                    <!-- price cost -->
                    <div class="art-price-cost">
                        <div class="art-number">FREE<sup>*</sup></div>
                    </div>
                    <!-- price cost end -->
                    <!-- price list -->
                    <ul class="art-price-list">
                        <!-- list item -->
                        <li>Ui Design</li>
                        <!-- list item -->
                        <li>Web Development</li>
                        <!-- list item -->
                        <li class="art-empty-item">Logo design</li>
                        <!-- list item -->
                        <li class="art-empty-item">SEO optimization</li>
                        <!-- list item -->
                        <li class="art-empty-item">Wordpress integration</li>
                    </ul>
                    <!-- price list end -->
                    <!-- button -->
                    <a href="contact.html" class="art-link art-color-link art-w-chevron">Order now</a>
                    <div class="art-asterisk"><sup>*</sup>Free only when ordering paid
                        services</div>
                </div>
                <!-- price body end -->
            </div>
            <!-- price end -->

        </div>
        <!-- grid -->

        <!-- col -->
        <div class="col-lg-4">

            <!-- price -->
            <div class="art-a art-price art-popular-price">
                <!-- price body -->
                <div class="art-price-body">
                    <h5 class="mb-30">Hourly payment</h5>
                    <!-- price cost -->
                    <div class="art-price-cost">
                        <div class="art-number"><span>$</span>29<span>h</span></div>
                    </div>
                    <!-- price cost end -->
                    <!-- price list -->
                    <ul class="art-price-list">
                        <!-- list item -->
                        <li>Ui Design</li>
                        <!-- list item -->
                        <li>Web Development</li>
                        <!-- list item -->
                        <li>Logo design</li>
                        <!-- list item -->
                        <li class="art-empty-item">SEO optimization</li>
                        <!-- list item -->
                        <li class="art-empty-item">Wordpress integration</li>
                    </ul>
                    <!-- price list end -->
                    <!-- button -->
                    <a href="contact.html" class="art-link art-color-link art-w-chevron">Order now</a>
                </div>
                <!-- price body end -->
            </div>
            <!-- price end -->

        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-lg-4">

            <!-- price -->
            <div class="art-a art-price">
                <!-- price body -->
                <div class="art-price-body">
                    <h5 class="mb-30"> Full time</h5>
                    <!-- price cost -->
                    <div class="art-price-cost">
                        <div class="art-number"><span>$</span>2999<span>m</span></div>
                    </div>
                    <!-- price cost end -->
                    <!-- price list -->
                    <ul class="art-price-list">
                        <!-- list item -->
                        <li>Ui Design</li>
                        <!-- list item -->
                        <li>Web Development</li>
                        <!-- list item -->
                        <li>Logo design</li>
                        <!-- list item -->
                        <li>SEO optimization</li>
                        <!-- list item -->
                        <li>Wordpress integration</li>
                    </ul>
                    <!-- price list end -->
                    <!-- button -->
                    <a href="contact.html" class="art-link art-color-link art-w-chevron">Order now</a>
                </div>
                <!-- price body end -->
            </div>
            <!-- price end -->

        </div>
        <!-- col end -->

    </div>
    <!-- row end -->

</div>
<!-- container end --> --}}
