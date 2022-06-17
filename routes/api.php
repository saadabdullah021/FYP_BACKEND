<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Diseases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::get(['',Diseases::])
Route::get('/diseases', [Diseases::class, 'allDiseases']);
Route::post('/disease', [Diseases::class, 'getDisease']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
