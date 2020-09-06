<?php

namespace app\migration;


class CreateTableWeather implements Migration
{

    public static function run(): string
    {
        return "CREATE TABLE IF NOT EXISTS `weather` (id int primary key AUTO_INCREMENT,city_id varchar(300), params json)";
    }
}