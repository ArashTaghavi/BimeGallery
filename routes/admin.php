<?php
Route::middleware(['web', 'auth:web'])->group(function () {
    Route::get('/admin', 'DefaultController@index');
    Route::get('/admin/{all}', 'DefaultController@index')->where(['all' => '.*']);

    Route::prefix('api/admin')->name('admin.')->group(function () {
        Route::get('/', 'DefaultController@index');

        // ================================ Categories ================================
        Route::prefix('categories')->name('categories.')->group(function () {
            Route::get('/', 'CategoryController@index')->name('index');
            Route::post('/', 'CategoryController@store')->name('store');
            Route::delete('/{category}', 'CategoryController@destroy')->name('destroy');
            Route::put('/field-update/{category}/{field}', 'CategoryController@fieldUpdate')->name('field-update');
            Route::put('/published/{category}', 'CategoryController@published')->name('published');
        });
        // ================================ Categories ================================

        // ================================ Post Images ================================
        Route::prefix('post-images')->name('post-images.')->group(function () {
            Route::get('/', 'PostImageController@index')->name('index');
            Route::get('/{id}', 'PostImageController@get')->name('get');
            Route::post('/', 'PostImageController@store')->name('store');
            Route::put('/{id}', 'PostImageController@update')->name('update');
            Route::delete('/{post}', 'PostImageController@destroy')->name('destroy');
        });
        // ================================ Post Images ================================

        // ================================ Post Videos ================================
        Route::prefix('post-videos')->name('post-videos.')->group(function () {
            Route::get('/', 'PostVideoController@index')->name('index');
            Route::get('/{id}', 'PostVideoController@get')->name('get');
            Route::post('/', 'PostVideoController@store')->name('store');
            Route::put('/{id}', 'PostVideoController@update')->name('update');
            Route::delete('/{post}', 'PostVideoController@destroy')->name('destroy');
            Route::post('/upload-video', 'PostVideoController@uploadVideo')->name('upload-video');
        });
        // ================================ Post Videos ================================

        // ================================ Comments ================================
        Route::prefix('comments')->name('comments.')->group(function () {
            Route::get('/approved', 'CommentController@approved')->name('approved');
            Route::get('/pending', 'CommentController@pending')->name('pending');
            Route::put('/{comment}', 'CommentController@doApprove')->name('do-approve');
            Route::delete('/{comment}', 'CommentController@destroy')->name('destroy');
        });
        // ================================ Comments ================================

    });
});


