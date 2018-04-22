@extends('layouts/base')

@section('title', 'Events')


@section('page_title')
    <section id="page-title" class="page-title-mini">
		<div class="container clearfix">
			<h1 style="text-align:center">@lang('Events')</h1>
		</div>
	</section>
@endsection


@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container-fullwidth clearfix">
                <ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">
                    <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
                    @foreach ($unique_years as $year)
                        <li><a href="#" data-filter=".{{$year}}">{{$year}}</a></li>
                    @endforeach
                </ul>
                <div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
                    <i class="icon-random"></i>
                </div>

                <div class="clear"></div>

                <div id="portfolio" class="portfolio grid-container portfolio-5 clearfix">
                    @foreach ($events as $event)
                        <article class="portfolio-item {{substr($event['date'], 0, 4)}}">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false" data-speed="300" data-pause="3000">
									<div class="flexslider">
										<div class="slider-wrap">
                                            @foreach ($event['photos'] as $photo)
                                                <div class="slide">
                                                    <a href="{{url('/events/'.$event['date'])}}">
                                                        <img src="{{url('data/events/'.$event['date'].'/'.$photo)}}" style="max-height: 150px" alt="{{$event['title']}}">
                                                    </a>
                                                </div>
                                            @endforeach
										</div>
									</div>
								</div>
							</div>
							<div class="portfolio-desc">
                                <h3><a href="{{url('/events/'.$event['date'])}}">{{$event['title']}}</a><span>{{date_format(date_create($event['date']), 'd-M-Y')}}</span></h3>                               
							</div>
						</article>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
@endsection
