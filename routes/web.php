<?php

use App\Http\Controllers\artisanController;
use App\Http\Controllers\factorsController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\lawsController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    // 'register' => false, // regirster Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/addFactor', [factorsController::class, 'create'])->name('add.factor');
    Route::post('/store', [factorsController::class, 'store'])->name('store.factor');
    Route::get('testRoute', [factorsController::class, 'testRoute'])->name('testRoute');
    Route::get('/all', [factorsController::class, 'all'])->name('all.factors');
    Route::get('/show/{factorId}', [factorsController::class, 'showFactor'])->name('show.factor');
    Route::get('/delete/{factorId}', [factorsController::class , 'destroy'])->name('destroy.factor');

    Route::prefix('laws')->group(function () {
        Route::get('/create' , [lawsController::class , 'create'])->name('create.laws');
        Route::get('/destroy' , [lawsController::class , 'destroy'])->name('destroy.laws');
        Route::post('/store' , [lawsController::class , 'store'])->name('store.laws');
    });

});



Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', [logoutController::class , 'perform'])->name('logout.perform');
 });


Route::prefix('artisan')->group(function () {
    Route::get('migrate' , [artisanController::class , 'migrate']);
    Route::get('clearCache' , [artisanController::class , 'clearCache']);
    Route::get('npmInstall' , [artisanController::class , 'npmInstall']);
    Route::get('npmRunDev' , [artisanController::class , 'npmRunDev']);
    Route::get('migratereset' , [artisanController::class , 'migratereset']);
});