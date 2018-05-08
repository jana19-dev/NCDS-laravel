@extends('layouts/base')

@section('title', 'About Us')


@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="col_full">

                    <div class="heading-block center nobottomborder">
                        <h2>{{substr($members[0], 0, -4)}} Committee Members</h2>
                        <img src="{{asset('data/about/'.$members[0])}}" alt="{{$members[0]}}">
                    </div>

                    <hr/>

                    <h2>Past Committee Members</h2>

                    @foreach (array_slice($members, 1) as $member)
                    <div class="heading-block center nobottomborder">
                        <h2>{{substr($member, 0, -4)}}</h2>
                        <img src="{{asset('data/about/'.$member)}}" alt="{{$member}}">
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>
@endsection