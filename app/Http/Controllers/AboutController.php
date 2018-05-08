<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class AboutController extends Controller
{
    public function index(){
        $path = public_path().DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'about';
        $members = array_map('basename', File::allFiles($path));
        rsort($members);
        return view('about', [
            'about_active'=>'current', 
            'members'=>$members
        ]);
    }
}
