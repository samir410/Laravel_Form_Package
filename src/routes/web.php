<?php

use Illuminate\Http\Request;

Route::group(['namespace'=>'samir\formbuilder\Http\Controllers'], function(){
    
    
    Route::get('FormBuilder', 'FormController@index')->name('FormBuilder');
    Route::post('FormBuilder','FormController@send');


});

