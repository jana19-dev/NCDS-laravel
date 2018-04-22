<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news_path = public_path().DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'news'.DIRECTORY_SEPARATOR;
        $latest_news_channels = array(
            array(
                'name' => 'JVP News',
                'news' => simplexml_load_file($news_path.'jvpnews.xml')->channel->item
            ),
            array(
                'name' => 'Lankasri',
                'news' => simplexml_load_file($news_path.'lankasri.xml')->channel->item
            ),
            array(
                'name' => 'Canada Mirror',
                'news' => simplexml_load_file($news_path.'canadamirror.xml')->channel->item
            ),
            array(
                'name' => 'Tamilwin',
                'news' => simplexml_load_file($news_path.'tamilwin.xml')->channel->item
            ),
            array(
                'name' => 'Cine Ulagam',
                'news' => simplexml_load_file($news_path.'cineulagam.xml')->channel->item
            ),
            array(
                'name' => 'Manithan',
                'news' => simplexml_load_file($news_path.'manithan.xml')->channel->item
            ),
            array(
                'name' => 'Pathivu',
                'news' => simplexml_load_file($news_path.'pathivu.xml')->channel->item
            ),
            array(
                'name' => 'A-SriLanka',
                'news' => simplexml_load_file($news_path.'asrilanka.xml')->channel->item
            )
        );
        return view('news.index', ['news_active'=>'current', 'latest_news_channels'=>$latest_news_channels]);
    }
}
