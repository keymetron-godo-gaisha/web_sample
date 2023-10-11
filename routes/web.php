<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ContactFormController;

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
    return view('hello');
});

Route::get('/inquiry', [HelloController::class, 'inquiry'])->name('inquiry.index');
Route::get('/send-inquiry', [ContactFormController::class, 'sendInquiry'])->name('send.inquiry');
Route::post('/send-inquiry', [ContactFormController::class, 'sendInquiry'])->name('send.inquiry');

Route::get('/recruit', 'App\Http\Controllers\HelloController@recruit')->name('recruit.index');
