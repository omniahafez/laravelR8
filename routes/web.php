<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

Route::get('/', function () {
    return view('welcome');
});

//practical: without parameter
//Route::get('omnia', function () {
    //return ('welcome to my web');
//});

//practical: with parameter must be
//Route::get('yara/{id}', function ($id) {
   // return ('welcome to my web'.$id);
//});

//practical: with optional parameter
//Route::get('hamza/{id?}', function ($id=9) {
 //   return ('welcome to my web'.$id);
//});

//practical: with optional parameter with validation use wanted rang of number
//Route::get('hamza/{id?}', function ($id=9) {
  //  return ('welcome to my web'.$id);
//})->where(['id'=> "[0-9]+"]);

//practical: with optional parameter with anather validation use any number
//Route::get('hamza/{id?}', function ($id=9) {
  //  return ('welcome to my web'.$id);
//})->whereNumber('id');

//practical: with optional parameter with anather validation use any alphapatical only
//Route::get('course/{name}', function ($name) {
  //  return ('my name is:'.$name);
//})->whereAlpha('name');

//practical: with optional parameter with anather validation use any of given parameter
//Route::get('course/{name}', function ($name) {
  //  return ('my name is:'.$name);
//})->whereIn('name', ['omnia','yara','Yassin']);

//practical: with mutiplie optional parameter with requler validation
//Route::get('course/{name}/{id?}', function ($name, $id=0) {
   // return ('my name is:'.$name. "my id is:".$id);
//})->where(['id'=> '[0-9]+', 'name'=>'[a-zA-z]+']);

//practical: with route prifex
//Route::prefix('cars')->group(function(){
  //  Route::get('bmw', function () {
    //    return ('category is bmw');
//});
//Route::get('pego', function () {
  //  return ('category is pego');
//});
//});

//Route::fallback(function(){
    //return 'requsted page not found';
    //return redirect('/');
//});

Route::get('test20', [Mycontroller::class,'My_data']);

Route::get('form1', function () {
    return view('form1');
});

Route::post('recform1', function () {
    return 'data recevied';
})->name('receiveform1');//programming name
