<?php

use App\Http\Controllers\frontend\pages\HomepageController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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





 
Route::get('/', [HomepageController::class, 'index'])->name('index');



Route::get('/advices-on-youtube', [HomepageController::class, 'youtubeVideos'])->name('youtube');
Route::get('/site-blogs', [HomepageController::class, 'blogs'])->name('allBlogs');
Route::get('/single-blogs/{id}', [HomepageController::class, 'blogSingleViewPage'])->name('blogSingleViewPage');
Route::get('/single-blogs-category/{id}', [HomepageController::class, 'categoryWiseSingleView'])->name('categoryWiseSingleView');



Route::get('/search-blogs', [HomepageController::class, 'searchPosts'])->name('searchPosts');






Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
