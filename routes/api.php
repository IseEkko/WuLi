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




Route::prefix('experiment6')->group(function (){
    /**
     * @Author: oys
     */

    Route::post('completion6','Completion6Controller@completion6');//实验6答题

    Route::get('pdf6','Completion6Controller@pdf6');//实验6pdf

    Route::post('completion6photo','Completion6Controller@completion6photo');//实验6图片分存入

    Route::post('completion6out','Completion6Controller@completion6out');//拿答题数据对象
});







Route::prefix('experiment')->group(function (){
    /**
     * @Author: Alexcutest
     */
    Route::post('student','ExperimentController@student');//学生信息


    Route::post('completion','ExperimentController@completion');//实验答题

    Route::post('completion8','runController@completion8');//实验8答题

    Route::get('pdf','ExperimentController@pdf');//实验pdf

    Route::get('pdf8','runController@pdf8');//实验8pdf


});

Route::prefix('bridge') -> group(function(){
    Route::post('student','BridgeController@student');//学生信息
    Route::post('completion','BridgeController@completion');//实验答题
    Route::get('pdf','BridgeController@pdf');//实验pdf
});





Route::prefix('experiment11')->group(function (){
    /**
     * @Author: pxy
     */

    Route::post('completion11','Completion11Controller@completion11');//实验11答题

    Route::get('pdf11','Completion11Controller@pdf11');//实验11pdf

});

