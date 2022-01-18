<?php

use QB\Migration\Column;
use QB\Migration\Migration;

Migration::create_table("stations",
    Column::IntegerField("id", ["primary" => true,"increament" => true]),
    Column::StringField("name",255,["unique"=>true]),
    Column::StringField("link",512),
    Column::StringField("icon",255)
);