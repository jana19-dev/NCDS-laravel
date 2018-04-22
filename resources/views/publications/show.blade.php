@extends('layouts/base')

@section('title', $title)

@section('sub_menu')
            <div id="page-menu">

                <div id="page-menu-wrap">

                    <div class="container clearfix">

                        <div class="menu-title"><span>{{$title}}</span></div>

                        <nav class="one-page-menu">
                            <ul>
                                <li><a href="#" data-href="#header"><div>Start</div></a></li>
                                <li><a href="#" data-href="#section-about"><div>About</div></a></li>
                                ...
                            </ul>
                        </nav>

                        <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

                    </div>

                </div>

            </div>
@endsection

@section('content')
    <section id="content">
        <div class="content-wrap row">



            
        </div>
    </section>
@endsection