<?php

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
Route::get('/User', function(Request $request){
    $request->get('client_role');
})->middleware(['api_auth']);
Route::middleware('auth:api')->post('/Test', function (Request $request) {
    return $request->user();
});
