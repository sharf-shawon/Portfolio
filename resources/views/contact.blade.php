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
                    <h4>Contact information</h4>
                </div>
                <!-- title frame end -->
            </div>
            <!-- section title end -->

        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-lg-4">
            <!-- contact card -->
            <div class="art-a art-card">
                <div class="art-table p-15-15">
                    <ul>
                        <li>
                            <h6>Name:</h6><span>{{setting('site.name')}}</span>
                        </li>
                        <li>
                            <h6>Designation:</h6><span>{{setting('site.designation')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- contact card end -->

        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-lg-4">
            <!-- contact card -->
            <div class="art-a art-card">
                <div class="art-table p-15-15">
                    <ul>
                        <li>
                            <h6>Country:</h6><span>{{setting('site.country')}}</span>
                        </li>
                        <li>
                            <h6>City:</h6><span>{{setting('site.city')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- contact card end -->
        </div>
        <!-- col end -->
        <!-- col -->
        <div class="col-lg-4">
            <!-- contact card -->
            <div class="art-a art-card">
                <div class="art-table p-15-15">
                    <ul>
                        <li>
                            <h6>Email:</h6><span>{!! hideConf(setting('site.email'), true) !!}</span>
                        </li>
                        <li>
                            <h6>Phone:</h6><span>{!! hideConf(setting('site.phone'), true) !!}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- contact card end -->
        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-lg-12">

            <!-- section title -->
            <div class="art-section-title">
                <!-- title frame -->
                <div class="art-title-frame">
                    <!-- title -->
                    <h4>Get in touch</h4>
                </div>
                <!-- title frame end -->
            </div>
            <!-- section title end -->

            <!-- contact form frame -->
            <div class="art-a art-card">

                <!-- contact form -->
                <form id="form" method="POST" action="{{url('/contact')}}" class="art-contact-form">
                    @csrf
                    <!-- form field -->
                    <div class="art-form-field">
                        <!-- name input -->
                        <input id="name" name="name" class="art-input" type="text" placeholder="Name" required maxlength="100">
                        <!-- label -->
                        <label for="name"><i class="fas fa-user"></i></label>
                    </div>
                    <!-- form field end -->
                    <!-- form field -->
                    <div class="art-form-field">
                        <!-- email input -->
                        <input id="email" name="email" class="art-input" type="email" placeholder="Email" required maxlength="100">
                        <!-- label -->
                        <label for="email"><i class="fas fa-at"></i></label>
                    </div>
                    <!-- form field end -->
                    <!-- form field -->
                    <div class="art-form-field">
                        <!-- phone input -->
                        <input id="phone" name="phone" class="art-input" type="text" placeholder="Phone Number" required maxlength="20">
                        <!-- label -->
                        <label for="phone"><i class="fas fa-phone"></i></label>
                    </div>
                    <!-- form field end -->
                    <!-- form field -->
                    <div class="art-form-field">
                        <!-- message textarea -->
                        <textarea id="message" name="message" class="art-input" placeholder="Message" required maxlength="500"></textarea>
                        <!-- label -->
                        <label for="message"><i class="far fa-envelope"></i></label>
                    </div>
                    <!-- form field end -->
                    <!-- button -->
                    <div class="art-submit-frame">
                        <button class="art-btn art-btn-md art-submit" type="submit" id="contactSubmitBtn"><span>Send message</span></button>
                        <!-- success -->
                        <div class="art-success">Success <i class="fas fa-check"></i></div>
                    </div>
                </form>
                <!-- contact form end -->

            </div>
            <!-- contact form frame end -->

        </div>
        <!-- col end -->

    </div>
    <!-- row end -->

</div>
<!-- container end -->

@include('inc.public.brands')

@endsection
