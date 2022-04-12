<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharactersController;

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
    return view('homepage');
});
Route::get('/marauder', function () {
    return view('marauder.marauder');
});

// Route::get('/all', [CharactersController::class, 'all']);
Route::controller(CharactersController::class)->group(function () {
    Route::get('/all', 'all');
    Route::get('/all/{id}', 'all');
    Route::get('/students', 'students');
    Route::get('/students/{id}', 'students');
    Route::get('/staff', 'staff');
    Route::get('/staff/{id}', 'staff');
    Route::get('/house/{house}', 'house');
    Route::get('/house/{house}/{id}', 'house');
    Route::get('/houses', 'houses');
});

Route::get('/templates', function(){
    return view('child');
});

Route::get('/cs', function(){
    return view('components-and-slots', [
        'messageVar' => 'this is the message'
    ]);
});