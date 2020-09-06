<?php

namespace app\model\api;


abstract class Api
{
    protected $conf;

    public function __construct($config = __DIR__.'/../../config/configApi.php')
    {
        $this->conf = require $config;
    }
}