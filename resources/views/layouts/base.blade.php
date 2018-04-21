<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Stylesheets ====================================== -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/png" sizes="16x16">

    <title>@yield('title')</title>
</head>
<body class="stretched">
    <!-- The Main Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">
        <!-- Header
		============================================= -->
        @include('layouts.header')
        @yield('slider')
        <!-- Site Content
		============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    @yield('content')

                </div>

            </div>

        </section>

        <!-- Footer
		============================================= -->
        <footer id="footer" class="dark">

            <div class="container">

                @include('layouts.footer')

            </div>

            <!-- Copyrights
			============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    Something

                </div>

            </div>

        </footer>

    </div>
	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    
    <!-- Footer Scripts
    ============================================= -->
    <script src="{{asset('js/functions.js')}}"></script>
</body>

</html>
