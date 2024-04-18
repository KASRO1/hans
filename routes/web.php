<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use \App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("auth/{token}", [IndexController::class, "auth"])->name("auth");
Route::group(['middleware' => 'log.action'], function () {
    Route::get("/", [IndexController::class, "index"])->name("index");
    Route::get("/all-videos", [IndexController::class, "allVideos"])->name("all.video");
    Route::get("/videos/{category}", [IndexController::class, "showVideoInCategory"])->name("videos:category");
    Route::get("/video/{id}", [IndexController::class, "viewVideo"])->name("video:id");
    Route::get("/redirect/{btn_name}", [IndexController::class, "redirect"])->name("redirect:btn_name");


});
Route::middleware('check_auth')->prefix("admin")->group(function () {
    Route::get('/main', [AdminController::class, 'index'])->name("admin");
    Route::get('/settings', [AdminController::class, 'settings'])->name("settings"); // Исправлено "settigns" на "settings"
    Route::post('/settings', [AdminController::class, 'settingsSave'])->name("settings.save"); // То же здесь
    Route::get('/videos', [AdminController::class, 'videos'])->name("settings.videos");
    Route::post('/video/add', [AdminController::class, 'videoAdd'])->name("video.add");
    Route::post('/category/add', [AdminController::class, 'createCategory'])->name("category.add");
    Route::get("/category/delete/{id}", [AdminController::class, "deleteCategory"])->name("category.delete:id");
});
