<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/',\App\Livewire\Home\Index::class)->name('home');
Route::get('/services',\App\Livewire\Home\Services::class)->name('services');
Route::get('/services/{slug}',\App\Livewire\Home\ServicesDetails::class)->name('services.details');
Route::get('/portfolio',\App\Livewire\Home\Services::class)->name('portfolio');
Route::get('/article',\App\Livewire\Home\Services::class)->name('article');
Route::get('/about',\App\Livewire\Home\Services::class)->name('about');
Route::get('/contact',\App\Livewire\Home\Services::class)->name('contact');

