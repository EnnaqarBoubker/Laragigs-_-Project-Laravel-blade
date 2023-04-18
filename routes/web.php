<?php

use App\Models\Listing;
use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingsController;
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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing 


Route::get('/', [ListingsController::class, 'index']);

Route::get('/listings/create', [ListingsController::class, 'create']);

Route::post('/listings', [ListingsController::class, 'store']);

Route::get('/listings/{listing}', [ListingsController::class, 'show']);
