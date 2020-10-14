<!-- info bar -->
<div class="art-info-bar">

    <!-- menu bar frame -->
    <div class="art-info-bar-frame">

        <!-- info bar header -->
        <div class="art-info-bar-header">
            <!-- info bar button -->
            <a class="art-info-bar-btn" href="#.">
                <!-- icon -->
                <i class="fas fa-ellipsis-v"></i>
            </a>
            <!-- info bar button end -->
        </div>
        <!-- info bar header end -->

        <!-- info bar header -->
        <div class="art-header">
            <!-- avatar -->
            <div class="art-avatar">
                <a data-fancybox="avatar" href="https://graph.facebook.com/100007290403062/picture?type=large"
                    class="art-avatar-curtain">
                    <img src="https://graph.facebook.com/100007290403062/picture?type=large" alt="avatar">
                    <i class="fas fa-expand"></i>
                </a>
                <!-- available -->
                <div class="art-lamp-light">
                    <!-- add class 'art-not-available' if not available-->
                    <div class="art-available-lamp"></div>
                </div>
            </div>
            <!-- avatar end -->
            <!-- name -->
            <h5 class="art-name mb-10"><a href="{{url("/")}}">{{setting("site.name")}}</a></h5>
            <!-- post -->
            <div class="art-sm-text">{{setting("site.designation")}}</div>
        </div>
        <!-- info bar header end -->

        <!-- scroll frame -->
        <div id="scrollbar2" class="art-scroll-frame">

            <!-- info bar about -->
            <div class="art-table p-15-15">
                <!-- about text -->
                <ul>
                    <!-- country -->
                    <li>
                        <h6>Residence:</h6><span>{{setting("site.country")}}</span>
                    </li>
                    <!-- city -->
                    <li>
                        <h6>City:</h6><span>{{setting("site.city")}}</span>
                    </li>
                    <!-- age -->
                    <li>
                        <h6>Age:</h6><span>{{setting("site.age")}}</span>
                    </li>
                </ul>
            </div>
            <!-- info bar about end -->

            <!-- divider -->
            <div class="art-ls-divider"></div>

            <!-- links frame -->
            <div class="art-links-frame p-15-15">

                <!-- download cv button -->
                <a href="{{hideConf('#')}}" id="cvb" class="art-link art-color-link text-center">Download CV <i
                        class="fas fa-download"></i></a>
            </div>
            <!-- links frame end -->

            <!-- divider -->
            <div class="art-ls-divider"></div>

            <!-- language skills -->
            <div class="art-lang-skills p-30-15">
                @foreach (explode("|", setting('site.languages')) as $key => $item)
                <?php $item = explode(",", $item); ?>
                <div class="art-lang-skills-item">
                    <div id="circleprog{{$key}}" class="art-cirkle-progress circleprog" val="{{$item[1]}}"></div>
                    <!-- title -->
                    <h6>{{$item[0]}}</h6>
                </div>
                @endforeach
            </div>
            <!-- language skills end -->

            <!-- divider -->
            <div class="art-ls-divider"></div>

            <!-- Programming Languages -->
            <div class="art-hard-skills p-30-15">

                @foreach (explode("|", setting('site.programmingLanguages')) as $key => $item)
                <?php $item = explode(",", $item); ?>
                <div class="art-hard-skills-item">
                    <div class="art-skill-heading">
                        <!-- title -->
                        <h6>{{$item[0]}}</h6>
                    </div>
                    <!-- progressbar frame -->
                    <div class="art-line-progress">
                        <!-- progressbar -->
                        <div id="lineprog{{$key}}" val="{{$item[1]}}" class="lineprog"></div>
                    </div>
                    <!-- progressbar frame end -->
                </div>
                @endforeach

            </div>
            <!-- Programming languages end -->

            <!-- divider -->
            <div class="art-ls-divider"></div>

            <!-- knowledge list -->
            <ul class="art-knowledge-list p-15-0">
                @foreach (explode("|", setting("site.skills")) as $item)
                <!-- list item -->
                <li>{{$item}}</li>
                @endforeach
            </ul>
            <!-- knowledge list end -->

        </div>
        <!-- scroll frame end -->

        <!-- sidebar social -->
        <div class="art-ls-social">
            <!-- social link -->
            <a href="{{hideConf(setting("site.facebook"))}}" target="_blank"><i class="fab fa-facebook"></i></a>
            <!-- social link -->
            <a href="{{hideConf(setting("site.linkedin"))}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <!-- social link -->
            <a href="{{hideConf(setting("site.github"))}}" target="_blank"><i class="fab fa-github"></i></a>
            <!-- social link -->
            <a href="{{hideConf(setting("site.twitter"))}}" target="_blank"><i class="fab fa-twitter"></i></a>
            <!-- social link -->
            <a href="{{hideConf(setting("site.youtube"))}}" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
        <!-- sidebar social end -->

    </div>
    <!-- menu bar frame end -->

</div>
<!-- info bar end -->
@if (Auth::check())
@push('scripts')
<script>
    $("#cvb").on("click", function(){ location.href = '/cv'; })
    $(document).ready(function(){


    });
</script>
@endpush
@endif
{{-- @push('scripts')
<script>
    $(document).ready(function(){

var bar = new ProgressBar.Line(lineprog1, {
    strokeWidth: 1.72,
    easing: 'easeInOut',
    duration: 1400,
    delay: 2800,
    trailWidth: 1.72,
    svgStyle: {
        width: '100%',
        height: '100%'
    },
    step: (state, bar) => {
        bar.setText(Math.round(bar.value() * 100) + ' %');
    }
});

bar.animate(.9);

var bar = new ProgressBar.Line(lineprog2, {
    strokeWidth: 1.72,
    easing: 'easeInOut',
    duration: 1400,
    delay: 2900,
    trailWidth: 1.72,
    svgStyle: {
        width: '100%',
        height: '100%'
    },
    step: (state, bar) => {
        bar.setText(Math.round(bar.value() * 100) + ' %');
    }
});

bar.animate(.95);

var bar = new ProgressBar.Line(lineprog3, {
    strokeWidth: 1.72,
    easing: 'easeInOut',
    duration: 1400,
    delay: 3000,
    trailWidth: 1.72,
    svgStyle: {
        width: '100%',
        height: '100%'
    },
    step: (state, bar) => {
        bar.setText(Math.round(bar.value() * 100) + ' %');
    }
});

bar.animate(.75);

var bar = new ProgressBar.Line(lineprog4, {
    strokeWidth: 1.72,
    easing: 'easeInOut',
    duration: 1400,
    delay: 3100,
    trailWidth: 1.72,
    svgStyle: {
        width: '100%',
        height: '100%'
    },
    step: (state, bar) => {
        bar.setText(Math.round(bar.value() * 100) + ' %');
    }
});

bar.animate(.65);

var bar = new ProgressBar.Line(lineprog5, {
    strokeWidth: 1.72,
    easing: 'easeInOut',
    duration: 1400,
    delay: 3200,
    trailWidth: 1.72,
    svgStyle: {
        width: '100%',
        height: '100%'
    },
    step: (state, bar) => {
        bar.setText(Math.round(bar.value() * 100) + ' %');
    }
});

bar.animate(.85);

    });
</script>
@endpush --}}
