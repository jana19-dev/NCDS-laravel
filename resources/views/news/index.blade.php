@extends('layouts/base')

@section('title', 'Latest News')

@section('content')
    <section id="content">
        <div class="content-wrap row">

            @foreach ($latest_news_channels as $channel)
                <div class="col-lg-6 col-md-12">
                    <div class="container-fullwidth clearfix">
                        <div class="fancy-title title-border"><h3>{{$channel['name']}}</h3></div>

                        <div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-margin="30" data-nav="true" data-items-xs="1" data-items-sm="1" data-items-md="2" data-items-lg="3" data-items-xl="4" data-autoplay="10000" data-loop="true" data-pagi="false">
                        @foreach ($channel['news'] as $news)

                            <div class="oc-item">
                                <div class="ipost clearfix">
                                    <div class="entry-image">
                                        <a href="javascript:void(0);" onclick="showModal('{{$news->guid}}'); return false;" target="_blank"><img class="image_fade" src="{{$news->children('media', 'http://search.yahoo.com/mrss/')->thumbnail->attributes()['url']}}" alt="Image"></a>
                                    </div>
                                    <div class="entry-title">
                                        <h4><a href="javascript:void(0);" onclick="showModal('{{$news->guid}}'); return false;" target="_blank">{{str_limit($news->title, 40)}}</a></h4>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i>{{date_format(date_create($news->pubDate), 'Y-m-d H:i:s')}}</li>
                                    </ul>
                                </div>
                            </div>

                        @endforeach
                        </div>
                    </div>
                </div>

            @endforeach
            
            <a id="newsModalButton" href="#newsModal" data-lightbox="inline" class="hidden"></a>
            <!-- Modal -->
            <div class="modal1 mfp-hide" id="newsModal">
                <div class="block divcenter" style="background-color: #FFF">
                    <div id="newsContent"></div>
                    <div class="section center nomargin" style="padding: 30px;">
                        <a href="#" class="button" onClick="$.magnificPopup.close();return false;">Close</a>
                    </div>
                </div>
            </div>



        </div>
    </section>
@endsection