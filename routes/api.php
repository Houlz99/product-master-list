<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\SkillController;
use App\Http\Controllers\Api\Practice\LeetController;
use App\Http\Controllers\Api\Practice\AnswerController;

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

Route::group(['prefix' => 'v1'], function() {
    Route::apiResource('skills', SkillController::class);
});

Route::group(['prefix' => 'practice'], function() {
    Route::put('leet', [AnswerController::class, 'execute']);
    // Route::put('leet', [LeetController::class, 'execute']);
});