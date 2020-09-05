<?php

namespace app\model\db;

use app\migration\Migration;

class Migrate extends DbModel
{
    public function run(Migration $class)
    {
        if ($this->checkPDO()) {
            $sql = $class::run();
            $this->pdo->exec($sql);
            print_r($this->pdo->errorInfo());
            echo $sql;
        }
    }
}