<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\Clientcontroller;

Route::get('/custom', [CustomController::class, 'index']);
Route::post('/custom', [CustomController::class, 'store']);

Route::post('insertclient', [Clientcontroller::class,'store'])->name('insertclient');


Route::get('/addClient', [Clientcontroller::class, 'create'])->name('addClient');
Route::get('clients', [Clientcontroller::class, 'index'])->middleware('verified')->name('clients');
Route::get('editClients/{id}', [Clientcontroller::class, 'edit'])->name('editClients');
Route::put('updateClients/{id}', [Clientcontroller::class, 'update'])->name('updateClients');
Route::get('showClients/{id}', [Clientcontroller::class, 'show'])->name('showClients');
Route::delete('delClient', [Clientcontroller::class, 'destroy'])->name('delClient');
Route::delete('forceDeleteClients', [Clientcontroller::class, 'forcedelete'])->name('forceDeleteClients');
Route::get('trashClients', [Clientcontroller::class, 'trash'])->name('trashClients');
Route::get('restoreClients/{id}', [Clientcontroller::class, 'restore'])->name('restoreClients');


Route::get('/custom', [CustomController::class, 'showCustomPage']);