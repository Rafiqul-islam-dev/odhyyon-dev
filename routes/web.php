<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\Backend\ClientsController;
use App\Http\Controllers\Backend\NewsEventController;
use App\Http\Controllers\Backend\aboutUsController;
use App\Http\Controllers\Backend\FontendContact;
use App\Models\NewsEvent;
use App\Models\Clients;
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
    return view('fontend.home');
});

//Fontend Page route
Route::get('/Product-Features', [FontendController::class, 'productFeatures'])->name('Product-Features');
Route::get('/Pricing', [FontendController::class, 'pricing'])->name('Pricing');
Route::get('/Clients', [FontendController::class, 'clients'])->name('Clients');
Route::get('/News-Events', [FontendController::class, 'newsEvents'])->name('News-Events');
Route::get('/About-us', [FontendController::class, 'aboutus'])->name('About-us');
Route::get('/Contact-us', [FontendController::class, 'contactUs'])->name('Contact-us');




//BACKEND

//Backend Controller Clients
Route::get('/clients', [ClientsController::class, 'index'])->name('clients');
Route::post('/addClients', [ClientsController::class, 'addClients'])->name('addClients');
Route::get('/editClients/{id}', [ClientsController::class, 'editClients'])->name('editClients');
Route::post('/updateClients/{id}', [ClientsController::class, 'updateClients'])->name('updateClients');
Route::get('/delet/{id}', [ClientsController::class, 'delet'])->name('delet');



// Backend Controller NewsEvent
Route::get('/newsEvent', [NewsEventController::class, 'index'])->name('newsEvent');
Route::post('/addNewsEvent', [NewsEventController::class, 'addNewsEvent'])->name('addNewsEvent');
Route::get('/editNewsEvent/{id}', [NewsEventController::class, 'editNewsEvent'])->name('editNewsEvent');
Route::post('/updateNewsEvent/{id}', [NewsEventController::class, 'updateNewsEvent'])->name('updateNewsEvent');
Route::get('/deletnews/{id}', [NewsEventController::class, 'deletnews'])->name('deletnews');



// aboutUs Controller NewsEvent
Route::get('/aboutUs', [aboutUsController::class, 'index'])->name('aboutUs');
Route::post('/addaboutUs', [aboutUsController::class, 'addaboutUs'])->name('addaboutUs');
Route::get('/editaboutUs/{id}', [aboutUsController::class, 'editaboutUs'])->name('editaboutUs');
Route::post('/updateaboutUs/{id}', [aboutUsController::class, 'updateNewsEvent'])->name('updateaboutUs');
Route::get('/deletaboutUs/{id}', [aboutUsController::class, 'deletaboutUs'])->name('deletaboutUs');

//Contact Us Daynamic
Route::post('/inquery', [FontendContact::class, 'inqueryodhyyon'])->name('inquery');
Route::get('/emailList', [FontendContact::class, 'emailList'])->name('emailList');



Route::get('/dashboard', function () {
    $counter = [
        'clients' => count(Clients::all()),
        'news' => count(NewsEvent::all()),
    ];
    return view('dashboard', compact('counter'));
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
