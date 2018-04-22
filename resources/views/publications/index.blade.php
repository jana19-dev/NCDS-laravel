@extends('layouts/base')

@section('title', 'Publications')


@section('page_title')
    <section id="page-title" class="page-title-mini">
		<div class="container clearfix">
			<h1 style="text-align:center">@lang('Theepam Publications')</h1>
		</div>
	</section>
@endsection


@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container-fullwidth clearfix">
                <div class="row">
                    @foreach ($publications as $publication)
                        <div class="col-lg-2 col-md-4 bottommargin">
                            <div class="team">
                                <div class="team-image">
                                <img src="{{asset('data/theepam/'.$publication.'/cover.jpg')}}" alt="{{$publication}}">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title"><h4>@lang('Theepam') {{date_format(date_create($publication), 'Y-M-d')}}</h4></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection