<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemTypeController;
use App\Http\Controllers\MahasiswaController;
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
    return to_route('mahasiswas.index');
});

Route::controller(ItemController::class)->group(function(){
    Route::get('items', 'index')->name('items.index');
    Route::get('items/create', 'create')->name('items.create');
    Route::post('items/store', 'store')->name('items.store');
    Route::get('items/edit/{item}', 'edit')->name('items.edit');
    Route::patch('items/update/{item}', 'update')->name('items.update');
    Route::delete('items/delete/{item}', 'delete')->name('items.delete');
});

Route::resource('mahasiswas', MahasiswaController::class);
Route::resource('types', ItemTypeController::class);