<?php
namespace app\Http\controllers;

use app\Http\models\Station;
use Young\Framework\Http\Controller;

use function PHPSTORM_META\type;

class StationController extends Controller{

    public function index(){
        $stations = (new Station)->all();
        return $stations;
    }

    public function get(Station $station){
        return json_encode($station);
    }
}