<div id="top-bar">
    <div class="container clearfix">
        <div class="nobottommargin">
            <h3 style="text-align:center;"> {{trans('translations.header_title')}} </h3>
        </div>
    </div>
</div>

<header id="header" class="split-menu" data-sticky-class="not-dark">

    <div id="header-wrap">

    <div class="container clearfix">

        <div id="primary-menu-trigger">
            <i class="icon-reorder"></i>
        </div>

        <!-- Logo
        ============================================= -->
        <div id="logo">
            <a href="/" class="standard-logo" data-dark-logo="{{asset('images/logo.png')}}"><img src="{{asset('images/logo.png')}}" alt="NCDS Logo"></a>
            <a href="/" class="retina-logo" data-dark-logo="{{asset('images/logo.png')}}"><img src="{{asset('images/logo.png')}}" alt="NCDS Logo"></a>
        </div
        <!-- #logo end -->

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="with-arrows clearfix">

            <ul>
                <li><a href="#"><div>Home</div></a></li>
                <li><a href="#"><div>Explore</div></a>
                    <ul>
                        <li><a href="#"><div>NextGen Framework</div></a></li>
                        <li><a href="#"><div>Stunning Graphics</div></a></li>
                        <li><a href="#"><div>Secured Solutions</div></a></li>
                    </ul>
                </li>
                <li class="mega-menu"><a href="#"><div>Mega</div></a>
                    <div class="mega-menu-content style-2 clearfix">
                        <ul class="mega-menu-column col-md-3">
                            ...
                        </ul>
                        <ul class="mega-menu-column col-md-3">
                            ...
                        </ul>
                        <ul class="mega-menu-column col-md-3">
                            ...
                        </ul>
                        <ul class="mega-menu-column col-md-3">
                            ...
                        </ul>
                    </div>
                </li>
            </ul>

            <ul>
                <li><a href="#"><div>FAQs</div></a></li>
                <li><a href="#"><div>Gallery</div></a></li>
                @if (App::isLocale('en'))
            <li><a href="{{url('/changeLocale')}}"><div>தமிழ்</div></a></li>
                @else
                    <li><a href="{{url('/changeLocale')}}"><div>English</div></a></li>
                @endif
            </ul>

        </nav><!-- #primary-menu end -->

</header>

