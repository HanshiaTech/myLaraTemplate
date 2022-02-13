<?php

use App\Http\Controllers\indexController;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('index',[indexController::class,'index'])->name('dashboard.index');
Route::get('index1',[indexController::class,'index1'])->name('dashboard.index1');
Route::get('index2',[indexController::class,'index2'])->name('dashboard.index2');
Route::resource('/',indexController::class);