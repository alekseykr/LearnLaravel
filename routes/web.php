<?php

Route::get('/',[\App\Http\Controllers\PagesController::class,'index'])->name('index');
Route::get('/about',[\App\Http\Controllers\PagesController::class,'about'])->name('about');
Route::get('/faqs',[\App\Http\Controllers\PagesController::class,'faqs'])->name('faqs');
Route::get('/category',[\App\Http\Controllers\PagesController::class,'category'])->name('category');
Route::get('/pricing',[\App\Http\Controllers\PagesController::class,'pricing'])->name('pricing');
Route::get('/category/{slug}',[\App\Http\Controllers\CategoryController::class,'category'])->name('categories');
Route::get('/post/{post}',[\App\Http\Controllers\PostController::class,'post'])->name('post');


