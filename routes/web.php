<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\NotesController;



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

URL::forceScheme('https');


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function (){ 
  return view('welcome');
});

Route::resource('/customer', CustomerController::class);
Route::resource('/manufacturer', ManufacturerController::class);
Route::resource('/equipment', EquipmentController::class);
Route::resource('/invoice', InvoiceController::class);
Route::resource('/note', NotesController::class);


Route::get('/board', function () {
    return view('board');
});


/* Connect to your database */

Route::get('/db-test', function () {
    try {
         echo \DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
          echo 'None';
    }
});


Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});


Route::fallback(function () {
    //
    return view('404page');
});
