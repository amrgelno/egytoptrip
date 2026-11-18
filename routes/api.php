<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Models\member;
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

Route::group(['middleware'=>'auth:api' ], function () {
//jwt api



});


//Route::get('/Fav_Ads', [App\Http\Controllers\Api\Fav_Ads::class, 'index']); // for blade   Return   blade or  vue component

Route::get('/FavAds', [App\Http\Controllers\Api\Fav_Ads::class, 'json']);   // for Fetch api
Route::get('/jsonlayoutfx', [App\Http\Controllers\Api\jsonlayoutfx::class,'index']);     // INDEX.BLADE   laravelvue
