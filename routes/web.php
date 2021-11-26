<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [Homecontroller::class,'index']);
Route::get('/home', [Homecontroller::class,'redirect']);


Route::prefix('admin')->middleware('auth')->group(function () {

});
// Route::get('doctor',[DoctorController::class,'create']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::resource('doctor','App\Http\Controllers\Admin\DoctorController');
Route::resource('appointment','App\Http\Controllers\Admin\AppointmentController');
