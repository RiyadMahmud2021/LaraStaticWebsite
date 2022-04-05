<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'showHome'] );
Route::get('/home', [SiteController::class, 'showHome'] );
Route::get('/about', [SiteController::class, 'showAbout']  );
Route::get('/service', [SiteController::class, 'showService']  );
Route::get('/portfolio', [SiteController::class, 'showPortfolio'] );