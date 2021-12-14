<?php

namespace app\validations;
use Young\Modules\Validation\ValidationRule;

class NumberValidation extends ValidationRule{
    
    public function validate($input,$arg){
        return is_numeric($input);
    }
}