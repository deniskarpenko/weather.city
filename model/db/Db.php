<?php

namespace app\model\db;


class DbModel
{
    protected $pdo;

    public function __construct($conf_path = __DIR__ . "/../../config/config.php")
    {
        if (file_exists($conf_path)) {
            $this->_getPDO($conf_path);
            return true;
        }
        echo "Not config";
        return false;
    }

    private function _getPDO($conf_path)
    {
        $conf = include($conf_path);
        $dsn = $this->_getDsn($conf);
        $this->pdo = new \PDO($dsn, $conf['login'], $conf['password']);
    }

    private function _getDsn($conf)
    {
        return $conf['driver'] . ':host=' . $conf['host'] . ';port=' . $conf['port'] . ';dbname=' . $conf['db'];
    }

    public function getTableName(): string
    {
        $table = lcfirst((new \ReflectionClass($this))->getShortName());
        return $table;
    }

    protected function checkPDO()
    {
        if (!is_null($this->pdo) && $this->pdo instanceof \PDO)
            return true;
        return false;
    }
}