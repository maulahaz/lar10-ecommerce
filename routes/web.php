<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;

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
//--Custom Livewire:
Route::get('/', HomePage::class);

//--Original Laravel:
Route::get('/welcome', function () {
    return view('welcome');
});
