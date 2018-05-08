<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PublicationsController extends Controller
{
    public function index(){
        $path = public_path().DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'theepam';
        $publications = array_map('basename', File::directories($path));
        rsort($publications);
        return view('publications.index', ['publications_active'=>'current', 'publications'=>$publications]);
    }

    public function show($date){
        $path = public_path().DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'theepam'.DIRECTORY_SEPARATOR.$date;
        $pages = array_map('basename', File::allFiles($path));
        return view('publications.show', [
            'publications_active'=>'current', 
            'title'=>'Theepam '.date_format(date_create($date), 'd-M-Y'),
            'date'=>$date,
            'pages'=>$pages
        ]);
    }
}
