<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
//use App\Http\Controllers\Clientcontroller;
use App\Http\Controllers\Studentcontroller;
use Illuminate\Support\Facades\Mail;

Route::group(
  [
      'prefix' => LaravelLocalization::setLocale(),
      'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
  ], function(){

Route::get('/', function () {
    return view('welcome');
});


//Route::post('insertclient', [Clientcontroller::class,'store'])->name('insertclient');
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

// Route::get('addClient', [Clientcontroller::class, 'create'])->name('addClient');
// Route::get('clients', [Clientcontroller::class, 'index'])->name('clients');
// Route::get('editClients/{id}', [Clientcontroller::class, 'edit'])->name('editClients');
// Route::put('updateClients/{id}', [Clientcontroller::class, 'update'])->name('updateClients');
// Route::get('showClients/{id}', [Clientcontroller::class, 'show'])->name('showClients');
// Route::delete('delClient', [Clientcontroller::class, 'destroy'])->name('delClient');
// Route::delete('forceDeleteClients', [Clientcontroller::class, 'forcedelete'])->name('forceDeleteClients');
// Route::get('trashClients', [Clientcontroller::class, 'trash'])->name('trashClients');
// Route::get('restoreClients/{id}', [Clientcontroller::class, 'restore'])->name('restoreClients');



Route::get('addstudent', [Studentcontroller::class, 'create'])->name(('addstudent'));
Route::get('students', [Studentcontroller::class, 'index'])->name('students');
Route::get('editStudent/{id}', [Studentcontroller::class, 'edit'])->name('editStudent');
Route::put('updateStudent/{id}', [Studentcontroller::class, 'update'])->name('updateStudent');
Route::get('showStudent/{id}', [Studentcontroller::class, 'show'])->name('showStudent');
Route::delete('delStudent', [Studentcontroller::class, 'destroy'])->name('delStudent');
Route::delete('forceDeleteStudents', [Studentcontroller::class, 'forcedelete'])->name('forceDeleteStudents');
Route::get('trashStudents', [Studentcontroller::class, 'trash'])->name('trashStudents');
Route::get('restoreStudents/{id}', [Studentcontroller::class, 'restore'])->name('restoreStudents');




//Route::post('recform1', [Mycontroller::class, 'receiveForm1'])->name('receiveform1');
Route::get('mysession', [Mycontroller::class, 'myVal']);
Route::get('restoresession', [Mycontroller::class, 'restoreVal']);
Route::get('deletesession', [Mycontroller::class, 'deleteVal']);
Route::get('deleteAllsession', [Mycontroller::class, 'deleteAllSession']);
Route::get('mysession', [Mycontroller::class, 'myValFlas']);
Route::get('restoresession', [Mycontroller::class, 'restoreValFlash']);
Route::get('clientMail', [Mycontroller::class, 'sendClientMail']);


//Route::get('contact', [Mycontroller::class, 'testimonial2']);

//Route::post('send-email', [Mycontroller::class, 'submit'])->name('contact.send');




Route::get('contact', [MyController::class, 'showForm'])->name('contact.form');
Route::post('contact.send', [MyController::class, 'sendMail'])->name('contact.send');
//Route::post('recform1', function () {Route::get('restoresession', [Mycontroller::class, 'restoreVal']);

 // Route::get('form1', [Mycontroller::class,'receiveForm1']);

   //return 'data recevied';
//})->name('receiveform1');//programming name

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/send-test-email', function () {
  Mail::raw('This is a test email', function ($message) {
      $message->to('test@example.com')
              ->subject('Test Email');
  });

  return 'Test email sent!';
});
  });