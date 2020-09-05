<?php

namespace app\migration;


class CreateTableWeather implements Migration
{

    public static function run(): string
    {
        return "CREATE TABLE IF NOT EXISTS `weather` ( city_id varchar(300), params json)";
    }
}