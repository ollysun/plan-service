<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
\Illuminate\Support\Facades\Event::listen('illuminate.query',function($query){
    var_dump($query);
});

$app->post('plans/api', 'PlansController@testApi');//post example

//this should be list by platform or geo or provider or response based on params
$app->get('plans/list/{platform}/{geo}/{provider}', 'PlansController@getPlansByPlatformProviderGeo');
