<?php

namespace app\model\db;

use app\migration\Migration;

class Migrate extends DbModel
{
    public static function run(Migration $class)
    {
        $class::run();
    }
}