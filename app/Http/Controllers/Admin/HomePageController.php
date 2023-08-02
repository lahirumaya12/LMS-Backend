<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage;

class HomePageController extends Controller
{

    public function SelectVideo(){
        $result = HomePage::select('video_description', 'video_url')->get();
        return $result;

    }

    public function SelectTotal(){

       $result = HomePage::select('total_student', 'total_course', 'total_review')->get();
        return $result;
    }

    public function SelectTech(){
        $result = HomePage::select('tech_description')->get();
        return $result;

    }

     public function SelectTitle(){
        $result = HomePage::select('home_title', 'home_subtitile')->get();
        return $result;

    }
    //
}
