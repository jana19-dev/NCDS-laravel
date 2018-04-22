<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PublicationsController extends Controller
{
    public function index(){
        $path = public_path().DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'theepam';
        $publications = array_map('basename', File::directories($path));
        return view('publications.index', ['publications_active'=>'current', 'publications'=>array_reverse($publications)]);
    }

    public function show($date){
        return view('publications.show', ['publications_active'=>'current', 'title'=>'Publication '.$date]);
    }
}
