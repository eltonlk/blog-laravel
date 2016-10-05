<?php

Route::get('/', 'BlogController@Index');

Route::group([ 'prefix' => 'admin', 'middleware' => 'auth' ], function () {
    Route::get('/', 'Admin\PostsController@Index');

    Route::group([ 'prefix' => 'posts' ], function () {
        Route::get('/'         , [ 'as' => 'admin.posts.index'   , 'uses' => 'Admin\PostsController@index' ]);
        Route::get('/create'   , [ 'as' => 'admin.posts.create'  , 'uses' => 'Admin\PostsController@create' ]);
        Route::post('/'        , [ 'as' => 'admin.posts.store'   , 'uses' => 'Admin\PostsController@store' ]);
        Route::get('/{id}/edit', [ 'as' => 'admin.posts.edit'    , 'uses' => 'Admin\PostsController@edit' ]);
        Route::put('/{id}'     , [ 'as' => 'admin.posts.update'  , 'uses' => 'Admin\PostsController@update' ]);
        Route::get('/{id}'     , [ 'as' => 'admin.posts.destroy' , 'uses' => 'Admin\PostsController@destroy' ]);
    });
});

Auth::routes();
