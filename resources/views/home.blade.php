@extends('layouts/base')

@section('title', 'Nainativu CDS')

@section('slider')
    <section id="slider" class="slider-element swiper_wrapper full-screen clearfix">
        <div class="slider-parallax-inner">
            <div class="swiper-slide dark" style="background-image: url({{asset('images/banner02.jpg')}});">
                <div class="container clearfix">
                    <div class="slider-caption slider-caption-center">
                        <h2 data-caption-animate="fadeInUp">@lang('Nainativu Canadian Development Society')</h2>
                        <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">Say something here short.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection