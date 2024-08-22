<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CE1Controller;

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

Route::get('/', function () {
    return view('frontend.home');
});


Route::view('/einc','frontend.einc');




Route::post('/celevel1',[CE1Controller::class,'addData']);
Route::view('/celevel1','frontend.celevel1');
Route::view('/celevel2','frontend.celevel2');
Route::view('/ce','frontend.ce');
Route::view('/trial','frontend.trial');




Route::view('/ceapp','frontend.ceapp');
Route::view('/ceapp2','frontend.ceapp2');
Route::view('/eincapp','frontend.eincapp');
Route::view('/eincapp2','frontend.eincapp2');

//EE
Route::view('/eelogin','frontend.eelogin');
Route::view('/eemain','frontend.eemain');


//SE
Route::view('/selogin','frontend.selogin');
Route::view('/semain','frontend.semain');
Route::view('/semain2','frontend.semain2');
Route::view('/semain3','frontend.semain3');
Route::view('/semain4','frontend.semain4');
Route::view('/ee1','frontend.ee1');
Route::view('/ee2','frontend.ee2');
Route::view('/ee3','frontend.ee3');
Route::view('/ee11','frontend.ee11');
Route::view('/ee22','frontend.ee22');
Route::view('/ee33','frontend.ee33');
Route::view('/ee111','frontend.ee111');
Route::view('/ee222','frontend.ee222');
Route::view('/ee333','frontend.ee333');
Route::view('/ee111','frontend.ee1111');
Route::view('/ee222','frontend.ee2222');
Route::view('/ee333','frontend.ee3333');

