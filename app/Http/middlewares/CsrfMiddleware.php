<?php
/**
 * A middleware must extends Middleware class from young-framework
 * and must a method named handle() with parameter request
 * if request is ok return true else return false
 */ 
namespace App\Http\middlewares;

use Young\Framework\Exceptions\HttpException;
use Young\Framework\Http\Middleware;
use Young\Framework\Http\Request;
use Young\Framework\Http\Session;

class CsrfMiddleware extends Middleware{
    public function handle(Request $request){
        if(in_array($request->method(),["POST","PUT","PATCH","DELETE"])){
            if(!isset($_REQUEST['csrf']))
                throw new HttpException("CSRF Token is invalid", 403);
            if(Session::has('csrf')&&Session::get('csrf')==$_REQUEST['csrf']){
                throw new HttpException("CSRF Token is invalid", 403);
            }
            else{
                Session::set('csrf',$_REQUEST['csrf']);
            }
        }
    }
}