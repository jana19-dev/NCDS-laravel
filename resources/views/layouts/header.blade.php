{{-- <div id="top-bar">
    <div class="container clearfix">
        <div class="nobottommargin">
            <h3 style="text-align:center;"> @lang('Nainativu Canadian Development Society') </h3>
        </div>
    </div>
</div> --}}

<header id="header">

    <div id="header-wrap">

    <div class="container clearfix">

        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

        <!-- Logo
        ============================================= -->
        <div id="logo">
            <a href="/" class="standard-logo" data-dark-logo="{{asset('images/logo.png')}}"><img src="{{asset('images/logo.png')}}" alt="NCDS Logo"></a>
            <a href="/" class="retina-logo" data-dark-logo="{{asset('images/logo.png')}}"><img src="{{asset('images/logo.png')}}" alt="NCDS Logo"></a>           
        </div
        <!-- #logo end -->
        
        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="style-5">

            <ul>
                <li><a href="#"><div><i class="icon-user"></i>@lang('About Us')</div></a></li>
                <li><a href="#"><div><i class="icon-book3"></i>@lang('Publications')</div></a></li>
                <li><a href="#"><div><i class="icon-line-camera"></i>@lang('Gallery')</div></a></li>
                <li><a href="#"><div><i class="icon-calendar3"></i>@lang('Events')</div></a></li>
                <li><a href="#"><div><i class="icon-news"></i>@lang('News')</div></a></li>
                <li><a href="#"><div><i class="icon-line-mail"></i>@lang('Contact Us')</div></a></li>
                @if (App::isLocale('en'))
                    <li><a href="{{url('/changeLocale')}}"><div><i class="icon-info-sign"></i>தமிழ்</div></a></li>
                @else
                    <li><a href="{{url('/changeLocale')}}"><div><i class="icon-info-sign"></i>English</div></a></li>
                @endif
            </ul>

            <!-- Top Search
            ============================================= -->
            <div id="top-search">
                <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                <form action="#" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                </form>
            </div><!-- #top-search end -->

        </nav><!-- #primary-menu end -->

</header>

