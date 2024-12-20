<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UpdateForm;
use App\Livewire\UpdateDisplay;
use App\Http\Controllers\UpdatesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/update-form', UpdateForm::class)->name('update-form');
Route::get('/update-display', UpdateDisplay::class)->name('update-display');
Route::resource('/updates', UpdatesController::class);
