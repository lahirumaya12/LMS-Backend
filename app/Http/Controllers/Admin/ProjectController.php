<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectController extends Controller
{

    public function onSelectThree(){
        $result = Projects::limit(3)->get();
        return $result;

    }

public function onSelectAll(){
        $result = Projects::all();
        return $result;

    }
    public function projectDetails($projectid){
        $id =  $projectid;
        $result = Projects::where('id',$id)->get();
        return $result;

    }

    //
}
