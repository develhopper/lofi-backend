<?php

namespace app\Http\models;

use Young\Framework\Http\Model;

class User extends Model{
    public $table = "users";
    public $hidden = ["password"];
}