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
                    <li class="menu-item {{isActive("")}}"><a href="">Home</a></li>
                    <!-- menu item -->
                    <li class="menu-item {{isActive("career")}}"><a href="career">Career</a></li>
                    <!-- menu item -->
                    <li class="menu-item {{isActive("contact")}}"><a href="contact">Contact</a></li>
                    <!-- menu item -->
                    <li class="menu-item {{isActive("portfolio")}}"><a href="portfolio">Portfolio</a></li>
                    <!-- menu item -->
                    <li class="menu-item {{isActive("blog")}}"><a href="blog">Blog</a></li>
                    <!-- menu item -->
                    <li class="menu-item {{isActive("signin")}}"><a href="login">Sign In</a></li>
                    <!-- menu item -->
                    @if (Auth::check() && Auth::user()->hasRole('admin'))
                    <li class="menu-item"><a href="backend" target="">Backend</a></li>
                    @endif
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
