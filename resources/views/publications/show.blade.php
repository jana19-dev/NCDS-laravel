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
            <div class="section notopborder nomargin">
                <div class="container clearfix">
                    @foreach ($pages as $page)
                        <img src="{{asset('data/theepam/'.$date.'/'.$page)}}" alt="{{$page}}">
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection