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
Route::prefix('experiment4')->group(function (){
    /**
     * @Author: yjx
     */
    Route::post('completion4','Completion4Controller@completion4');//实验4答题
    Route::get('pdf4','Completion4Controller@pdf4');//实验4pdf
});//yjx


Route::prefix('pendulum')->group(function (){
    /**
     * @Author: wzh
     */

    Route::post('completion3','PendulumController@completion3');//实验答题

    Route::get('pdf3','PendulumController@pdf3');//实验pdf

});



Route::prefix('experiment1')->group(function (){
    /**
     * @Author: pxy,zqz
     */

    Route::post('completion1','Completion1Controller@completion1');//实验1答题

    Route::get('pdf1','Completion1Controller@pdf1');//实验1pdf

});
Route::prefix('bridge1')->group(function (){
    /**
     * @Author: wzh
     */

    Route::post('completion5','Completion5Controller@completion5');//实验答题

    Route::get('pdf5','Completion5Controller@pdf5');//实验pdf

});

