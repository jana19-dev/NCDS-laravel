<header id="header" class="static-sticky">

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
                <li class="{{$about_active or ''}}"><a href="{{url('/about')}}"><div><i class="icon-user"></i>@lang('About Us')</div></a></li>
                <li class="{{$publications_active or ''}}"><a href="{{url('/publications')}}"><div><i class="icon-book3"></i>@lang('Publications')</div></a></li>
                <li class="{{$news_active or ''}}"><a href="{{url('/news')}}"><div><i class="icon-news"></i>@lang('News')</div></a></li>
                <li><a href="#"><div><i class="icon-line-camera"></i>@lang('Gallery')</div></a></li>
                <li class="{{$events_active or ''}}"><a href="{{url('/events')}}"><div><i class="icon-calendar3"></i>@lang('Events')</div></a></li>
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

