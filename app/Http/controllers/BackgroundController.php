<?php
namespace app\Http\controllers;

use app\Http\models\Background;
use Young\Framework\Http\Controller;

class BackgroundController extends Controller{

    public function index(){
        return (new Background)->all();
    }

    public function get($id){
        if($id == "random"){
            $station = (new Background)->select()->sort("rand()","")->first();
        }else{
            $station = (new Background)->find($id);
        }

        return [
            "url" => $station->link
        ];
    }
}