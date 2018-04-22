@extends('layouts/base')

@section('title', "$title")

@section('page_title')
    <section id="page-title" class="page-title-mini">
		<div class="container clearfix">
			<h1 style="text-align:center">@lang($title)</h1>
		</div>
	</section>
@endsection

{{-- @section('sub_menu')
    <div id="page-menu">
        <div id="page-menu-wrap">
            <div class="container clearfix">
                <div class="menu-title"><span>{{$title}}</span></div>              
                <nav class="one-page-menu">
                    <ul>
                        <li><a href="#" data-scrollto="#header"><div>Start</div></a></li>
                        <li><a href="#" data-scrollto="#header"><div>Start</div></a></li>
                        <li><a href="#" data-scrollto="#header"><div>About</div></a></li>
                    </ul>
                </nav>
                <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
            </div>
        </div>
    </div>
@endsection --}}

@section('content')
    <section id="content">
        <div class="content-wrap nopadding">

            {{-- <div class="section notopborder nomargin">
                <div class="container clearfix">
                    <div class="col_two_fifth topmargin-sm nobottommargin" style="min-height: 350px">
                        <canvas id="chart-radar"></canvas>
                    </div>
                    <div class="col_three_fifth nobottommargin col_last">
                        <div class="heading-block topmargin-sm">
                            <h2>Section with Light Background</h2>
                            <span>Show off your Important Content with Elegance &amp; Attitude.</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>
                        <a href="#" class="button button-3d button-large">Check out</a>
                    </div>
                </div>
            </div> --}}

            <iframe src="{{url('data/theepam/'.$date.'/content.pdf')}}" style="overflow:hidden;height:100vh;width:100vw" frameBorder="0">Something went wrong while fetching the news.</iframe>

            
        </div>
    </section>
@endsection