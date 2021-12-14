<?php
namespace app\validations;

use QB\QBuilder;
use Young\Modules\Validation\ValidationRule;

class UniqueValidation extends ValidationRule{

    public function validate($input, $args){
        if($args){
            $this->message = "{field} '$input' is taken";
            $model = new QBuilder();
            $model->table = $args;
            $result = $model->select($this->field)->where($this->field,$input)->first();
            if($result)
                return false;
            return true;
        }
    }
}