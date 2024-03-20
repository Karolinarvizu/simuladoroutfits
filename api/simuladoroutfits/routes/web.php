<?php

use App\Http\Controllers\AccessorieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PantController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ShirtController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/old', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/admin',[AdminController::class,'index'])->name('admin.home');
Route::get('/admin/marcas',[BrandController::class,'index'])->name('admin.brands.index');
Route::get('/admin/tiendas',[ShopController::class,'index'])->name('admin.shops.index');
Route::get('/admin/zapatos',[ShoeController::class,'index'])->name('admin.shoes.index');
Route::get('/admin/calificaciones',[RatingController::class,'index'])->name('admin.ratings.index');
Route::get('/admin/pantalones',[PantController::class,'index'])->name('admin.pants.index');
Route::get('/admin/camisas',[ShirtController::class,'index'])->name('admin.shirts.index');
Route::get('/admin/accesorios',[AccessorieController::class,'index'])->name('admin.accessories.index');
Route::get('/admin/comentarios',[CommentController::class,'index'])->name('admin.comments.index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
