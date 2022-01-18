<?php

use QB\Migration\Column;
use QB\Migration\Migration;

Migration::create_table("backgrounds",
    Column::IntegerField("id",["primary" => true,"increament" => true]),
    Column::StringField("title",255),
    Column::StringField("link",255)
);