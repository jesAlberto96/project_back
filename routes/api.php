<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/questions-by-poll/{code}', [App\Http\Controllers\Api\v1\PollController::class, 'getQuestionByPollCode']);
Route::post('/v1/polls', [App\Http\Controllers\Api\v1\PollController::class, 'store']);
Route::get('/v1/hair-experts/all', [App\Http\Controllers\Api\v1\HairExpertController::class, 'getAll']);
