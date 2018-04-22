<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use DateTime;

class EventsController extends Controller
{
    public function index(){
        $path = public_path().DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'events';
        $events_date = array_map('basename', File::directories($path));
        rsort($events_date);
        $events = array();
        $unique_years = array_unique(array_map(function ($date) {
            return substr($date, 0, 4);
        }, $events_date));
        rsort($unique_years);
        foreach ($events_date as $date) {
            $event_details = file_get_contents($path.DIRECTORY_SEPARATOR.$date.DIRECTORY_SEPARATOR."details.json");
            $event_details = json_decode($event_details, true);
            $photos = array_map('basename', File::glob($path.DIRECTORY_SEPARATOR.$date.DIRECTORY_SEPARATOR.'*.jpg'));
            shuffle($photos);
            $photos = array_slice($photos, 0, 5);
            array_push($events, array(
                'title'=>$event_details['title'],
                'date'=>$date,
                'location'=>$event_details['location'],
                'photos'=> $photos
            ));
        }
        return view('events.index', ['events_active'=>'current', 'events'=>$events, 'unique_years'=>$unique_years]);
    }

    public function show($date){
        $path = public_path().DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'events';
        $event_details = file_get_contents($path.DIRECTORY_SEPARATOR.$date.DIRECTORY_SEPARATOR."details.json");
        $event_details = json_decode($event_details, true);
        $photos = array_map('basename', File::glob($path.DIRECTORY_SEPARATOR.$date.DIRECTORY_SEPARATOR.'*.jpg'));
        $start_time = getJavascriptStartTime($date, $event_details['start_time']);
        return view('events.show', [
            'events_active'=>'current', 
            'event_details'=>$event_details,
            'date'=>$date,
            'photos'=> $photos,
            'cover'=>in_array('cover.jpg', $photos) ? 'cover.jpg' : $photos[0],
            'start_time'=>$start_time
        ]);
    }

}



function getJavascriptStartTime($date, $time) {
    $month = substr($date, 5, 2);
    $month = (int) $month-1;
    $month = sprintf("%02d", $month);
    $result = substr_replace($date, $month, 5, 2);
    $result = str_replace('-', ',', $result).','.substr_replace($time, ',', 2, 0);
    return $result;
}