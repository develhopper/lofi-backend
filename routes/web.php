<?php
/**
 * Register routes for web here
 */

use Young\Framework\Router\Route;

Route::get("/", "HomeController@index");
Route::get("register","HomeController@register");
Route::post("register","HomeController@register");
Route::get("login","HomeController@login");
Route::post("login","HomeController@login");
Route::post("logout", "HomeController@logout");

// redirect all invalid routes to index
Route::get("(?!api/).*","HomeController@index");