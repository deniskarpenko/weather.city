<?php

namespace app\migration;


use app\model\db\DbModel;

class CreateTableCity implements Migration
{
    public static function run():string
    {
       return "CREATE TABLE IF NOT EXISTS `city` (id varchar(100) PRIMARY KEY, city varchar(300))";
    }
}