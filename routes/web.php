<?php
Route::middleware(['web'])->group(function () {
    Route::get('/', 'Front\SiteController@index')->name('index');
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('/login', 'Auth\LoginController@login')->name('doLogin');
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@create')->name('doRegister');

    Route::get('/search', 'Front\SiteController@search')->name('search');

    // ==================================== WebSite ====================================
    Route::prefix('post')->name('post.')->group(function () {
        Route::get('/{slug}', 'Front\PostController@index')->name('index');
        Route::post('/{slug}', 'Front\PostController@store_comment')->name('store-comment');
        Route::get('/like/{slug}', 'Front\PostController@like')->name('like');
    });
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/{slug}', 'Front\CategoryController@index')->name('index');
    });
    Route::prefix('video-category')->name('video-category.')->group(function () {
        Route::get('/{slug}', 'Front\VideoCategoryController@index')->name('index');
    });


    // ==================================== WebSite ====================================


});
