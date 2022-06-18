<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\initiatepush;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('payer');
});
/*
Route::get('/launchpayer', function(){
    return view('payer');
});*/

//Route::post('/requestpay','initiatepush@pay');
Route::post('/requestpay',[initiatepush::class,'pay']);

//Route::post('/callback','confirmcallback@storeResults');
Route::post('/callback',[confirmcallback::class,'storeResults']);
