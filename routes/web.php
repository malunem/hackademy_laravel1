<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'getAllRegions'])->name('homepage');

Route::get('/regione-{region}', [PublicController::class, 'getSingleRegion'])->name('regione');

Route::get('/ricetta-{ricetta}', [PublicController::class, 'getRecipe'])->name('ricetta');
