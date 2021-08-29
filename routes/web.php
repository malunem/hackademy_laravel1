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

Route::get('/', [PublicController::class, 'getHomepage'])->name('homepage');

Route::get('/contattaci', [PublicController::class, 'getContactPage'])->name('contattaci');

Route::post('/contattaci', [PublicController::class, 'postMessage'])->name('postMessage');

Route::get('/{region}', [PublicController::class, 'getRegionPage'])->name('regione');

Route::get('/{region}/{recipe}', [PublicController::class, 'getRecipePage'])->name('ricetta');