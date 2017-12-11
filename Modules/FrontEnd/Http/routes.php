<?php

Route::group(['middleware' => 'web', 'prefix' => 'frontend', 'namespace' => 'Modules\FrontEnd\Http\Controllers'], function()
{
    Route::get('/', 'FrontEndController@index');
});
