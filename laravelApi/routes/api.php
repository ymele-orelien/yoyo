<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PartenersController;
use App\Http\Controllers\EvenementsController;
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

//route
Route::get("index-users",[usersController::class,'index']);
Route::post("login-users",[usersController::class,'login']);
///
Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::get("profile-users",[usersController::class,'profile']);
    Route::get("logout-users",[usersController::class,'logout']);
});
//route simpleUsers
Route::get("index-simpleUsers",[SimpleUsersController::class,'index']);
Route::post("create-simpleUsers",[SimpleUsersController::class,'register']);
Route::get("update-simpleUsers/{id}",[SimpleUsersController::class,'edit']);
Route::put("update-simpleUsers/{id}",[SimpleUsersController::class,'update']);
Route::delete("delete-simpleUsers/{id}",[SimpleUsersController::class,'destroy']);


//route parteners
Route::get("index-parterners",[PartenersController::class,'index']);
Route::post("create-parterners/{id}",[PartenersController::class,'store']);
Route::get("update-parterners/{id}",[PartenersController::class,'edit']);
Route::put("update-parterners/{id}",[PartenersController::class,'update']);
Route::delete("delete-parterners/{id}",[PartenersController::class,'destroy']);

//////////Donates
Route::get("index-donate",[DonateController::class,'index']);
Route::post("create-donate/{id}",[DonateController::class,'store']);

//////////POSTS
Route::get("index-posts",[PostController::class,'index']);
Route::post("create-posts/{id}",[PostController::class,'store']);
Route::put("update-posts/{id}",[PostController::class,'store']);
Route::delete("delete-post/{id}",[PartenersController::class,'destroy']);

/////Messages
Route::get("index-messages",[MessageController::class,'index']);
Route::post("send-messages/{id}",[MessageController::class,'send']);
Route::delete("delete-messages/{id}",[MessageController::class,'destroy']);

/////////evenemets
Route::get("index-evenements",[EvenementsController::class,'index']);
Route::post("create-evenements/{id}",[EvenementsController::class,'create_event']);
Route::put("update-evenements/{id}",[EvenementsController::class,'update_event']);

Route::delete("delete-evenements/{id}",[EvenementsController::class,'destroy_event']);

Route::controller(AuthController::class)->group(function(){
 Route::get("/",  'login')->name('login');
    Route::get("/logout", 'logout')->name('logout');
});
//route demande
Route::post("create-demande",[DemandeController::class,'create']);

