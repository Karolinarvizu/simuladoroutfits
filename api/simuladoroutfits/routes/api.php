<?php

use App\Http\Controllers\Api\AccessorieController;
use App\Http\Controllers\Api\AccessoriesController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\BrandsController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\CommentsController;
use App\Http\Controllers\Api\PantController;
use App\Http\Controllers\Api\PantsController;
use App\Http\Controllers\Api\ShirtController;
use App\Http\Controllers\Api\ShirtsController;
use App\Http\Controllers\Api\ShoeController;
use App\Http\Controllers\Api\ShopController;
use App\Http\Controllers\Api\ShopsController;
use App\Http\Controllers\Api\UserController;
use App\Models\Shoe;
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

Route::get('/brands',[BrandController::class, 'List']);
Route::get('/brands/{id}',[BrandController::class, 'item']);
Route::get('/shops',[ShopController::class, 'List']);
Route::get('/shops/{id}',[ShopController::class, 'item']);
Route::get('/comments',[CommentController::class, 'List']);
Route::get('/comments/{id}',[CommentController::class, 'item']);
Route::get('/pants',[PantController::class, 'List']);
Route::get('/pants/{id}',[PantController::class, 'item']);
Route::get('/shirts',[ShirtController::class, 'List']);
Route::get('/shirts/{id}',[ShirtController::class, 'item']);
Route::get('/accessories',[AccessorieController::class, 'List']);
Route::get('/accessories/{id}',[AccessorieController::class, 'item']);
Route::get('/shoes',[ShoeController::class, 'List']);
Route::get('/shoes/{id}',[ShoeController::class, 'item']);
Route::get('/users',[UserController::class,'list']);
Route::get('/users/{id}',[UserController::class,'item']);


Route::post('/brands/create',[BrandController::class,'create']); 
Route::post('/accessories/create',[AccessorieController::class,'create']);
Route::post('/comments/create',[CommentController::class,'create']);
Route::post('/pants/create',[PantController::class,'create']);
Route::post('/shoes/create',[ShoeController::class,'create']);
Route::post('/users/create',[UserController::class,'create']);
Route::post('/users/{id}/update',[UserController::class,'update']);

Route::post('/login',[AuthController::class,'login']);


