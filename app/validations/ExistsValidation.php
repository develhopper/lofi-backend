<?php

namespace app\validations;

use QB\QBuilder;
use Young\Modules\Validation\ValidationRule;

class ExistsValidation extends ValidationRule{

    public function validate($input, $arg){
        if($arg){
            $this->message = "{field} '$input' does not exists";
            $model = new QBuilder();
            $model->table = $arg;
            $result = $model->select($this->field)->where($this->field,$input)->first();
            if($result)
                return true;
            return false;
        }
    }
}