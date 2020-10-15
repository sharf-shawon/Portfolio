<!-- menu bar -->
<div class="art-menu-bar">

    <!-- menu bar frame -->
    <div class="art-menu-bar-frame">

        <!-- menu bar header -->
        <div class="art-menu-bar-header">
            <!-- menu bar button -->
            <a class="art-menu-bar-btn" href="#.">
                <!-- icon -->
                <span></span>
            </a>
            <!-- menu bar button end -->
        </div>
        <!-- menu bar header end -->

        <!-- current page title -->
        <div class="art-current-page"></div>
        <!-- current page title end -->

        <!-- scroll frame -->
        <div class="art-scroll-frame">

            <!-- menu -->
            <nav id="swupMenu">
                <!-- menu list -->
                <ul class="main-menu">
                    <!-- menu item -->
                    <li class="menu-item {{isActive("")}}"><a href="{{url("/")}}">Home</a></li>
                    <!-- menu item -->
                    <li class="menu-item {{isActive("career")}}"><a href="{{url("career")}}">Career</a></li>
                    <!-- menu item -->
                    <li class="menu-item {{isActive("contact")}}"><a href="{{url("contact")}}">Contact</a></li>
                    <!-- menu item -->
                    <li class="menu-item {{isActive("portfolio")}}"><a href="{{url("portfolio")}}">Portfolio</a></li>
                    <!-- menu item -->
                    <li class="menu-item {{isActive("blog")}}"><a href="{{url("blog")}}">Blog</a></li>
                    @guest
                    <li class="menu-item {{isActive("signin")}}"><a href="{{url("signin")}}">Sign In</a></li>
                    @endauth
                    <!-- menu item -->
                    <!-- menu item -->
                    @if (Auth::check() && Auth::user()->hasRole('admin'))
                    <li class="menu-item"><a href="{{url("backend")}}" target="">Backend</a></li>
                    @endif
                    <!-- menu item -->
                    <li class="menu-item {{isActive("privacy-policy")}}"><a href="{{url("privacy-policy")}}">Privacy Policy</a></li>
                </ul>
                <!-- menu list end -->
            </nav>
            <!-- menu end -->

            <!-- language change -->
            <ul class="art-language-change">
                <!-- language item -->
                @auth
                <li>
                    <a>{{Auth::user()->name}}</a>
                </li>
                <li>
                    <a href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @else
                <li class="art-active-lang"><a href="/signin">Sign In</a></li>
                @endauth
                <!-- language item -->
            </ul>
            <!-- language change end -->

        </div>
        <!-- scroll frame end -->

    </div>
    <!-- menu bar frame -->

</div>
<!-- menu bar end -->
