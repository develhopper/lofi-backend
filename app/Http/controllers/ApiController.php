<?php

namespace app\Http\controllers;

use app\Http\models\User;
use Young\Framework\Http\Controller;

class ApiController extends Controller{

    public function index(){
        return [
            "routes" => [
                "/users"
            ]
        ];
    }

    public function users(){
        $users = (new User)->all();

        return $users;
    }
}