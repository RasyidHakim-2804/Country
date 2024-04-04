<?php

use App\Http\Controllers\Api\V1\CityController;
use App\Http\Controllers\Api\V1\CountryController;
use App\Http\Controllers\Api\V1\RegionController;
use App\Http\Controllers\Api\V1\StateController;
use App\Http\Controllers\Api\V1\SubregionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', [CountryController::class, 'index']);
Route::get('/states', [StateController::class, 'index']);
Route::get('/cities', [CityController::class, 'index']);
Route::get('/regions', [RegionController::class, 'index']);
Route::get('/subregions', [SubregionController::class, 'index']);

Route::get('/kolom', [CountryController::class, 'dummy']);
