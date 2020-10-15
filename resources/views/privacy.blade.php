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
                    <h4>Privacy Policy</h4>
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
                <div class="art-table p-15-15 text-white">
                    <p>I respect your privacy. It is {{Request::root()}}'s policy to respect your privacy regarding any information I may collect from you across our website, {{Request::root()}}, and other sites I own and operate.</p>
                    <p>I only ask for personal information when I truly need it to provide a service to you. I collect it by fair and lawful means, with your knowledge and consent. I also let you know why we’re collecting it and how it will be used.</p>
                    <p>I only retain collected information for as long as necessary to provide you with your requested service. What data I store, we’ll protect within commercially acceptable means to prevent loss and theft, as well as unauthorised access, disclosure, copying, use or modification.</p>
                    <p>I don’t share any personally identifying information publicly or with third-parties, except when required to by law.</p>
                    <p>Our website may link to external sites that are not operated by me. Please be aware that I have no control over the content and practices of these sites, and cannot accept responsibility or liability for their respective privacy policies.</p>
                    <p>You are free to refuse our request for your personal information, with the understanding that I may be unable to provide you with some of your desired services.</p>
                    <p>Your continued use of our website will be regarded as acceptance of our practices around privacy and personal information. If you have any questions about how I handle user data and personal information, feel free to <a href="{{url("contact")}}">contact me</a>.</p>
                    <p>This policy is effective as of 01 October 2020.</p>
                </div>
            </div>
            <!-- contact card end -->

        </div>
        <!-- col end -->

    </div>
    <!-- row end -->

</div>
<!-- container end -->

@endsection
