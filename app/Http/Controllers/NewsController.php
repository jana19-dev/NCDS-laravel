<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $latest_news_channels = array(
            array(
                'name' => 'JVP News',
                'news' => simplexml_load_file('http://www.jvpnews.com/rss.xml')->channel->item
            ),
            array(
                'name' => 'Lankasri',
                'news' => simplexml_load_file('http://news.lankasri.com/rss.xml')->channel->item
            ),
            array(
                'name' => 'Canada Mirror',
                'news' => simplexml_load_file('http://www.canadamirror.com/rss.xml')->channel->item
            ),
            array(
                'name' => 'Tamilwin',
                'news' => simplexml_load_file('http://www.tamilwin.com/rss.xml')->channel->item
            ),
            array(
                'name' => 'Cine Ulagam',
                'news' => simplexml_load_file('http://www.cineulagam.com/rss.xml')->channel->item
            ),
            array(
                'name' => 'Manithan',
                'news' => simplexml_load_file('http://www.manithan.com/rss.xml')->channel->item
            )
        );
        return view('news.index', ['news_active'=> 'current', 'latest_news_channels'=>$latest_news_channels]);
    }
}
