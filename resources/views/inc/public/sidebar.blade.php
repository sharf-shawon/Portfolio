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
                <a data-fancybox="avatar" href="https://graph.facebook.com/100007290403062/picture?type=large" class="art-avatar-curtain">
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

            <!-- language skills -->
            <div class="art-lang-skills p-30-15">


                <!-- skill -->
                <div class="art-lang-skills-item">
                    <div id="circleprog1" class="art-cirkle-progress"></div>
                    <!-- title -->
                    <h6>French</h6>
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-lang-skills-item">
                    <div id="circleprog2" class="art-cirkle-progress"></div>
                    <!-- title -->
                    <h6>English</h6>
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-lang-skills-item">
                    <div id="circleprog3" class="art-cirkle-progress"></div>
                    <!-- title -->
                    <h6>Spanish</h6>
                </div>
                <!-- skill end -->

            </div>
            <!-- language skills end -->

            <!-- divider -->
            <div class="art-ls-divider"></div>

            <!-- hard skills -->
            <div class="art-hard-skills p-30-15">

                <!-- skill -->
                <div class="art-hard-skills-item">
                    <div class="art-skill-heading">
                        <!-- title -->
                        <h6>html</h6>
                    </div>
                    <!-- progressbar frame -->
                    <div class="art-line-progress">
                        <!-- progressbar -->
                        <div id="lineprog1"></div>
                    </div>
                    <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                    <div class="art-skill-heading">
                        <!-- title -->
                        <h6>CSS</h6>
                    </div>
                    <!-- progressbar frame -->
                    <div class="art-line-progress">
                        <!-- progressbar -->
                        <div id="lineprog2"></div>
                    </div>
                    <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                    <div class="art-skill-heading">
                        <!-- title -->
                        <h6>Js</h6>
                    </div>
                    <!-- progressbar frame -->
                    <div class="art-line-progress">
                        <!-- progressbar -->
                        <div id="lineprog3"></div>
                    </div>
                    <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                    <div class="art-skill-heading">
                        <!-- title -->
                        <h6>PHP</h6>
                    </div>
                    <!-- progressbar frame -->
                    <div class="art-line-progress">
                        <!-- progressbar -->
                        <div id="lineprog4"></div>
                    </div>
                    <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                    <div class="art-skill-heading">
                        <!-- title -->
                        <h6>Wordpress</h6>
                    </div>
                    <!-- progressbar frame -->
                    <div class="art-line-progress">
                        <!-- progressbar -->
                        <div id="lineprog5"></div>
                    </div>
                    <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

            </div>
            <!-- language skills end -->

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

            <!-- divider -->
            <div class="art-ls-divider"></div>

            <!-- links frame -->
            <div class="art-links-frame p-15-15">

                <!-- download cv button -->
                <a href="{{setting("cv")}}" class="art-link" download>Download cv <i class="fas fa-download"></i></a>

            </div>
            <!-- links frame end -->

        </div>
        <!-- scroll frame end -->

        <!-- sidebar social -->
        <div class="art-ls-social">
            <!-- social link -->
            <a href="{{setting("site.facebook")}}" target="_blank"><i class="fab fa-facebook"></i></a>
            <!-- social link -->
            <a href="{{setting("site.linkedin")}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <!-- social link -->
            <a href="{{setting("site.github")}}" target="_blank"><i class="fab fa-github"></i></a>
            <!-- social link -->
            <a href="{{setting("site.twitter")}}" target="_blank"><i class="fab fa-twitter"></i></a>
            <!-- social link -->
            <a href="{{setting("site.youtube")}}" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
        <!-- sidebar social end -->

    </div>
    <!-- menu bar frame end -->

</div>
<!-- info bar end -->
