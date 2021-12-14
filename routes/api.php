<?php
/**
 * Register routes for api here
 */

use Young\Framework\Router\Route;

Route::get("/","ApiController@index");
Route::get("users","ApiController@users");