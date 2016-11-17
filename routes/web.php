<?php

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('chat', 'ChatController@index');

Route::post('/chat/message', 'ChatController@message');