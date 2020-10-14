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
                    <h4>Please Login</h4>
                </div>
                <!-- title frame end -->
            </div>
            <!-- section title end -->

        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-lg-12">
            <!-- contact card -->
            <div class="art-a art-card">
                <h5>Before you can access sensitive information about me I would like to know who you are. Please use one of the following options to quickly login!</h5>
            </div>
            <!-- contact card end -->

        </div>
        <!-- col end -->

        <!-- col -->
        <div class="col-lg-4 text-center">
            <!-- contact card -->
            <a href="{{url('redirect/facebook')}}">
                <div class="art-a art-card">
                    <img class="img-responsive" src="{{asset('img/facebook.png')}}" alt="Facebook">
                    <h4 class="mt-3">Login with Facebook</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-4 text-center">
            <a href="{{url('redirect/google')}}">
                <div class="art-a art-card">
                    <img class="img-responsive" src="{{asset('img/google.png')}}" alt="Google">
                    <h4 class="mt-3">Login with Google</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-4 text-center">
            <a href="{{url('redirect/github')}}">
                <div class="art-a art-card">
                    <img class="img-responsive" src="{{asset('img/github.png')}}" alt="Github">
                    <h4 class="mt-3">Login with Github</h4>
                </div>
            </a>
            <!-- contact card end -->
        </div>
        <!-- col end -->
    </div>
    <!-- row end -->

</div>
<!-- container end -->

@endsection
