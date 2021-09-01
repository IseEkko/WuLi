<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('experiment')->group(function (){
    /**
     * @Author: Alexcutest
     */    
    Route::post('student','ExperimentController@student');//学生信息
    
    Route::post('completion','ExperimentController@completion');//实验答题


    Route::get('pdf','ExperimentController@pdf');//实验pdf
    
});

Route::prefix('bridge') -> group(function(){
    Route::post('student','BridgeController@student');//学生信息
    Route::post('completion','BridgeController@completion');//实验答题
    Route::get('pdf','BridgeController@pdf');//实验pdf
});