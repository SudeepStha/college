<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\FacultyController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\TeacherController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('students',StudentController::class);
Route::apiResource('teachers',TeacherController::class);
Route::apiResource('faculty',FacultyController::class);
Route::apiResource('gallery',GalleryController::class);
Route::apiResource('books',BookController::class);