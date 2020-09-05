<?php

namespace app\model\api;


abstract class Api
{
    public function _construct($config = __DIR__.'/../../config/configApi.php')
    {
        $conf = require $config;
    }
}