<?php
/**
 * This is a test controller
 * Your controllers must extends Controller class from young-framework
 */
namespace App\Http\controllers;

use app\Http\models\User;
use Young\Framework\Http\Controller;
use Young\Framework\Http\Request;
use Young\Framework\Http\Session;
use Young\Framework\Utils\Hash;

class HomeController extends Controller{

    /**
     * each function connected to router must return a string result
     * and result will be shown in the web page
     *
     * @return string
     */
    public function index(){
        return view("index.html");
    }

    public function login(Request $request){
        if($request->isMethod('POST')){
            $rules = [
                "username"=>"required|string|exists:users",
                "password" => "required|string"
            ];

            if($request->validate($rules)){
                $user = (new User())->select()->where("username", $request->username)->first();
                if(Hash::verify($request->password,$user->password)){
                    Session::set("username", $user->username);
                    Session::flash('success', 'You logged in successfuly');
                }
            }else{
                Session::flash('errors', $request->errors());
            }
        }
        return view("auth/login.html");
    }

    public function register(Request $request){
        if($request->isMethod('POST')){
            $rules = [
                "username" => "required|string|unique:users",
                "password" => "required|string|min:8"
            ];
            if($request->validate($rules)){
                $request->password = Hash::make($request->password);
                $user = new User();
                if($user->save($request->all(["username","password"]))){
                    Session::flash("success", "user created");
                }
            }else{
                Session::flash('errors', $request->errors());
            }
        }
        return view("auth/register.html");
    }

    public function logout(){
        if(Session::has('username'))
            Session::remove('username');
        return redirect("/");
    }

    public function redirect(){
        return redirect("/");
    }
}