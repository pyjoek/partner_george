<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\COntroller\PartnerController;

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashbord');
})->middleware(['auth'])->name('dashboard');

Route::get('/people', function () {
    return view('list-partners');
})->middleware(['auth']);

Route::get('/transaction', function () {
    return view('transactions');
})->middleware(['auth']);

Route::get('/reports', function () {
    return "Reports on the way";
});

require __DIR__.'/auth.php';

Route::post('/store', [PartnerController::class, 'store']);

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');