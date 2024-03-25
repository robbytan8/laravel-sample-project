<?php

use App\Http\Controllers\FamilyCardController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/fc', [FamilyCardController::class, 'index'])->name('fc-view');
Route::get('/fc-create', [FamilyCardController::class, 'create'])->name('fc-create');
Route::post('/fc-create', [FamilyCardController::class, 'store'])->name('fc-store');
