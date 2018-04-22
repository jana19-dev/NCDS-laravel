@extends('layouts/base')

@section('title', $event_details['title'])

@section('page_title')
    <section id="page-title" class="page-title-mini">
		<div class="container clearfix">
			<h1 style="text-align:center">@lang($event_details['title'])</h1>
		</div>
	</section>
@endsection



@section('content')
    <section id="content">
        <div class="content-wrap nopadding">
            <div class="single-event">
                <div class="entry-image parallax header-stick" style="background-image: url({{url('data/events/'.$date.'/'.$cover)}}); height:600px"   data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
                    <div class="entry-overlay-meta">
                        <h2><a href="#">{{$event_details['title']}}</a></h2>
                        <ul class="iconlist">
                            <li><i class="icon-calendar3"></i> <strong>Date:</strong>{{" ".date_format(date_create($date), 'd-M-Y')}}</li>
                            <li><i class="icon-time"></i> <strong>Timing:</strong> {{" ".$event_details['start_time']." - ".$event_details['end_time']}}</li>
                            <li><i class="icon-map-marker2"></i> <strong>Location:</strong> {{" ".$event_details['location']}}</li>
                        </ul>
                        @if (date_create($date) >= Carbon\Carbon::now())
                            <a href="#" class="btn btn-danger btn-block btn-lg">Contact Us</a>
                        @endif
                    </div>
                    @if (date_create($date) >= Carbon\Carbon::now())
                        <div class="entry-overlay">
                            <div id="event-countdown" class="countdown"></div>
                        </div>
                    @endif
                </div>
                <div class="container-fullwidth clearfix">
                    <div class="divider"><i class="icon-circle"></i></div>
                        <div class="col_three_fifth">
                            <h3>Details</h3>
                            <p>{{$event_details['description']}}}</p>
                        </div>
                        <div class="col_two_fifth col_last">
                            <h4>Location</h4>
                            <section id="event-location" class="gmap" style="height: 300px;"></section>
                        </div>
                    <div class="divider"><i class="icon-circle"></i></div>
                    <div class="col_full nobottommargin clearfix">
                        <h3>Gallery</h3>
                        <div class="masonry-thumbs grid-6" data-big="3" data-lightbox="gallery">
                            @foreach ($photos as $photo)
                                <a href="{{url('data/events/'.$date.'/'.$photo)}}" data-lightbox="gallery-item">
                                    <img class="image_fade" src="{{url('data/events/'.$date.'/'.$photo)}}" alt="{{$event_details['title']}}">
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="divider"><i class="icon-circle"></i></div>
                </div>           
            </div>
        </div>
    </section>
@endsection

@section('javascript')
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>

    <script src="{{asset('js/jquery.gmap.js')}}"></script>
	<script>
		jQuery(document).ready( function($){
			var eventStartDate = new Date({{$start_time}});
			$('#event-countdown').countdown({until: eventStartDate});
        });
        
		jQuery('#event-location').gMap({
			address: "{{$event_details['address']}}",
			maptype: 'ROADMAP',
			zoom: 15,
			markers: [
				{
					address: "{{$event_details['address']}}"
				}
			],
			doubleclickzoom: true,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}
		});

    </script>
@endsection