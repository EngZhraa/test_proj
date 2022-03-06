<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinancesController;
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

Route::get('/usersMang', function () {
    return view('usersMang');
})->middleware(['auth'])->name('usersMang');

Route::get('/fin_form', function () {
    return view('fin_form');
})->middleware(['auth'])->name('fin_form');

//Route::get('fin_form', [FinancesController::class, 'index']);
Route::post('fin_form', [FinancesController::class, 'store']);

require __DIR__.'/auth.php';
