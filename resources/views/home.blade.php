@extends('layouts/base')

@section('title', 'Nainativu CDS')

@section('slider')
    <section id="slider" class="slider-element swiper_wrapper full-screen clearfix">
        <div class="slider-parallax-inner">
            <div class="swiper-slide dark" style="background-image: url({{asset('images/banner.jpg')}});">
                <div class="container clearfix">
                    <div class="slider-caption slider-caption-center">
                        <h2>@lang('Nainativu Canadian Development Society')</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                something
            </div>
        </div>
    </section>
@endsection