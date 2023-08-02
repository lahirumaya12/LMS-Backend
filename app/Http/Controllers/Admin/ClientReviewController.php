<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clientReview;

class ClientReviewController extends Controller
{
    public function clientReview(){
        $result = clientReview::all();
        return $result;

    }
    //
}
