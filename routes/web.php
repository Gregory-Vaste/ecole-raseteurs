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

Route::get('/', function () {

    if(auth()->user()){
        auth()->user()->assignRole(['licencier']);
    }elseif(auth()->user()){
        auth()->user()->assignRole(['bureau']);
    }else{
        return view('welcome');
    }
    
});
Route::get('/articles', App\Http\Livewire\Articles::class)->name('articles');
Route::get('/produits', App\Http\Livewire\Products::class)->name('products');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
