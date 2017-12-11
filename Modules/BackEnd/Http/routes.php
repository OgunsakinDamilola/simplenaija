<?php

Route::group(['middleware' => 'web', 'prefix' => 'backend', 'namespace' => 'Modules\BackEnd\Http\Controllers'], function()
{
    Route::get('/', 'BackEndController@index');
});
