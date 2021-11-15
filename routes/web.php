<?php

use App\Http\Controllers\BlobController;
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

Route::get('/', function(){
return view('welcome');
})->name('accueil');
Route::get('/blob', [BlobController::class, 'accueil'])->name('accueil.blob');
Route::post('/blob', [BlobController::class, 'storeBlob'])->name('store.blob');
Route::get('/affiche', [BlobController::class, 'affiche'])->name('affiche.img');
