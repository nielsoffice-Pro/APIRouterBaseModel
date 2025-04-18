<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MsapiExamTypeApiController;

Route::prefix('msapi-exam-type')->group(function () {
    Route::get('/', [MsapiExamTypeApiController::class, 'index']);
    Route::post('/', [MsapiExamTypeApiController::class, 'store']);
    Route::get('{id}', [MsapiExamTypeApiController::class, 'show']);
    Route::put('{id}', [MsapiExamTypeApiController::class, 'update']);
    Route::delete('{id}', [MsapiExamTypeApiController::class, 'destroy']);
});



// Route::middleware('api')->group($routeFile);
