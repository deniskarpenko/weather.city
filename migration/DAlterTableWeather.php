<?php


namespace app\migration;


class DAlterTableWeather implements Migration
{

    public static function run(): string
    {
        return 'ALTER TABLE weather add COLUMN (date_weather date )';
    }
}