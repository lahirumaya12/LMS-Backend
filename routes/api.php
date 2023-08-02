<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\HomePageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/chartdata',[ChartController::class, 'onAllSelect']);

Route::get('/review',[ClientReviewController::class, 'clientReview']);

Route::post('/contact/send',[ContactController::class, 'onContact']);

Route::get('/coursehome',[CoursesController::class, 'onSelectCourse']);

Route::get('/courseall',[CoursesController::class, 'onSelectAll']);

Route::get('/coursedetails/{courseId}',[CoursesController::class, 'onSelectDetails']);

//footer route
Route::get('/footerdata',[FooterController::class, 'getFooterData']);

//information{privacy,about,terms}
Route::get('/getinfo',[InformationController::class, 'getInfo']);

//services route
Route::get('/getservices',[ServiceController::class, 'getService']);

//project all route
Route::get('/projecthome',[ProjectController::class, 'onSelectThree']);

Route::get('/projectall',[ProjectController::class, 'onSelectAll']);

Route::get('/projectDetails/{projectid}',[ProjectController::class, 'projectDetails']);

//Home all route
Route::get('/home/video',[HomePageController::class, 'SelectVideo']);

Route::get('/totalhome',[HomePageController::class, 'SelectTotal']);

Route::get('/hometech',[HomePageController::class, 'SelectTech']);

Route::get('/hometitle',[HomePageController::class, 'SelectTitle']);

