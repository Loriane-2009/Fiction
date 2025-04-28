<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Group API v1
Route::prefix('v1')->group(function () {
    Route::apiResource('stories', App\Http\Controllers\API\V1\StoryController::class);
    Route::apiResource('chapters', App\Http\Controllers\API\V1\ChapterController::class);
    Route::apiResource('choices', App\Http\Controllers\API\V1\ChoiceController::class);
});
