<?php

Route::get('/', 'BlogController@Index');

Route::group([ 'prefix' => 'admin' ], function () {
  Route::get('/', 'PostsAdminController@Index');

  Route::group([ 'prefix' => 'posts' ], function () {
    Route::get('/'         , [ 'as' => 'admin.posts.index'   , 'uses' => 'PostsAdminController@index' ]);
    Route::get('/create'   , [ 'as' => 'admin.posts.create'  , 'uses' => 'PostsAdminController@create' ]);
    Route::post('/'        , [ 'as' => 'admin.posts.store'   , 'uses' => 'PostsAdminController@store' ]);
    Route::get('/{id}/edit', [ 'as' => 'admin.posts.edit'    , 'uses' => 'PostsAdminController@edit' ]);
    Route::put('/{id}'     , [ 'as' => 'admin.posts.update'  , 'uses' => 'PostsAdminController@update' ]);
    Route::get('/{id}'     , [ 'as' => 'admin.posts.destroy' , 'uses' => 'PostsAdminController@destroy' ]);
  });
});
