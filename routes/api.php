<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
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

Route::middleware('api')->group(function () {
    Route::post('login', [AuthController::class,'login']);
    Route::post('register', [AuthController::class,'register']);

    Route::middleware('auth:api')->group(function () {
        Route::get('logout', [AuthController::class,'logout']);
        Route::get('refresh', [AuthController::class,'refresh']);
        Route::get('me', [AuthController::class,'me']);

        Route::get('articles',[ArticleController::class,'index']);
        Route::post('articles',[ArticleController::class,'store']);
        Route::get('articles/{article}',[ArticleController::class,'show']);
        Route::put('articles/{article}',[ArticleController::class,'update']);
        Route::delete('articles/{article}',[ArticleController::class,'destroy']);
    });
});
