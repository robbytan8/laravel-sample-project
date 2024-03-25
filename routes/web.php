<?php

use App\Http\Controllers\Data2Controller;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('index', function () {
    return view('index');
})->name('route-index');
Route::get('about', function () {
    return view('about');
})->name('route-about');
Route::get('data1', function () {
    return view('data1', [
        'category'=> 'History',
        'items' => [
            'T-Rex fossil',
            'Coliseum miniature',
            'Alexander "The Great" Sword',
        ]
    ]);
})->name('route-data1');
Route::get('data2', [Data2Controller::class, 'index'])->name('route-data2');
