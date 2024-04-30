<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\Clientcontroller;
use App\Http\Controllers\Studentcontroller;

Route::get('/', function () {
    return view('welcome');
});


Route::post('insertclient', [Clientcontroller::class,'store'])->name('insertclient');
Route::post('insertstudent', [Studentcontroller::class,'store'])->name('insertstudent');
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

//Route::get('test20', [Mycontroller::class,'My_data']);

Route::get('clientForm', [Clientcontroller::class, 'create']);
Route::get('addstudent', [Studentcontroller::class, 'create']);
//Route::post('recform1', [Mycontroller::class, 'receiveForm1'])->name('receiveform1');
//Route::post('recform1', [Mycontroller::class, 'receiveForm1'])->name('receiveform1');
//Route::post('recform1', function () {

 // Route::get('form1', [Mycontroller::class,'receiveForm1']);

   //return 'data recevied';
//})->name('receiveform1');//programming name

