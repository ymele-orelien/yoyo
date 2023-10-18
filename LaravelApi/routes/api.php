<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartenersController;
use App\Http\Controllers\SimpleUsersController;

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
//route simpleUsers
Route::post("create-simpleUsers/{id}",[SimpleUsersController::class,'create']);
Route::put("update-simpleUsers/{id}",[SimpleUsersController::class,'update']);
Route::delete("delete-simpleUsers/{id}",[SimpleUsersController::class,'destroy']);


//route parteners
Route::post("create-parterners/{id}",[PartenersController::class,'create']);
Route::put("update-parterners/{id}",[PartenersController::class,'update']);
Route::delete("delete-parterners/{id}",[PartenersController::class,'destroy']);

//route donates

