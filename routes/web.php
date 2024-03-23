<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;

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
require __DIR__.'/auth.php';

Route::get('/', function () {return view('list-partners-add');})->middleware(['auth']);
Route::get('/user-reg', function () {return view('index');});
Route::get('/sear', function () {return view('search');});
Route::get('/dashboard', function () {return view('dashbord');})->middleware(['auth'])->name('dashboard');
Route::get('/people', [PartnerController::class, 'index'])->middleware(['auth']);
Route::get('/transaction', function () {return view('transactions');})->middleware(['auth']);
Route::get('/reports', function () {return "Reports on the way";});
Route::get('/export-users', [PartnerController::class, 'export'])->name('export.users');
Route::get('/destroy/{id}', [PartnerController::class, 'destroy']);
Route::post('/update/{id}', [PartnerController::class, 'update']);
Route::get('/edit', function() {return view('list-partners-edit');});
Route::get('/edit/{id}', [PartnerController::class, 'edit']);
Route::post('/store', [PartnerController::class, 'store']);
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
