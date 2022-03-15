<?php
/**
 * Register routes for api here
 */

use Young\Framework\Router\Route;

Route::get("/","ApiController@index");
Route::get("users","ApiController@users");
Route::get("stations","StationController@index");
Route::get("stations/{station}", "StationController@get");
Route::get("backgrounds","BackgroundController@index");
Route::get("backgrounds/{id}","BackgroundController@get");