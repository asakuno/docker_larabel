<?php

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
use App\Http\Controllers\SampleController;
use App\Http\Controllers\BunbouguController;
// Route::get('URL', [Controllerの名前::class, 'Controller内のfunction名']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('sample', [SampleController::class, 'sample']);

Route::get('/bunbougus', [BunbouguController::class, 'index'])->name('bunbougus.index');

Route::get('/bunbougus/create', [BunbouguController::class, 'create'])->name('bunbougu.create');
Route::post('/bunbougus/store', [BunbouguController::class, 'store'])->name('bunbougu.store');

Route::get('/bunbougus/edit/{bunbougu}', [BunbouguController::class, 'edit'])->name('bunbougu.edit');
Route::put('/bunbougus/update/{bunbougu}', [BunbouguController::class, 'update'])->name('bunbougu.update');

Route::get('/bunbougus/show/{bunbougu}', [BunbouguController::class, 'show'])->name('bunbougu.show');

Route::delete('/bunbougus/delete/{bunbougu}', [BunbouguController::class, 'destroy'])->name('bunbougu.destroy');