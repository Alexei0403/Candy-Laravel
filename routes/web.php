<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\scheduleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-view', function () {
    return view('test'); // Replace 'test' with the actual name of your test view file
})->name('test-view');

