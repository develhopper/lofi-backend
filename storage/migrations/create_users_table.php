<?php

use QB\Migration\Column;
use QB\Migration\Migration;

Migration::create_table("users",
    Column::IntegerField("id",["primary"=>true,"increament"=>true]),
    Column::StringField("username",255, ["unique"=>true]),
    Column::StringField("password",255)
);