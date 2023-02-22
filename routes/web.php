<?php

use App\Http\Controllers\artisanController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\factorsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\lawsController;
use App\Http\Controllers\userStatusController;
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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
    Route::get('factor/all', [factorsController::class, 'all'])->name('all.factors');
    Route::get('/customer/all', [customerController::class, 'all'])->name('all.customers');
    Route::get('/show/{factorId}', [factorsController::class, 'showFactor'])->name('show.factor');
    Route::get('/delete/{factorId}', [factorsController::class , 'destroy'])->name('destroy.factor');
    Route::post('/update/{factorId}' , [factorsController::class , 'updateStatus'])->name('update.status');

    Route::prefix('laws')->group(function () {
        Route::get('/create' , [lawsController::class , 'create'])->name('create.laws');
        Route::get('/destroy' , [lawsController::class , 'destroy'])->name('destroy.laws');
        Route::post('/store' , [lawsController::class , 'store'])->name('store.laws');
    });

    Route::prefix('customers')->group(function(){
        Route::post('/create', [customerController::class , 'store'])->name('store.customer');
        Route::get('/delete/{id}', [customerController::class , 'destroy'])->name('destroy.customer');
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


// Route::get('userTracking', function () {
//     return view('frontend.user-traking');
// });


// Route::get('userStatus',[userStatusController::class , 'getStatus'])->name('get.status');
