<?php

namespace app\component;


class Router
{

    public static function  route()
    {
        $url = self::_getUri();
        $controller = 'app\\controller\\';

        if(!empty($url)){
            $path = parse_url($url);
            $params = explode('/', $path['path']);
            $controller.= ucfirst($params[0]).'Controller';
            $method = isset($params[1]) ? 'action'.ucfirst($params[1]) : 'actionIndex';
        } else {
            $controller.='IndexController';
            $method = 'actionIndex';
        }

        $resultController = new $controller;
        $resultController->$method();

    }

    private static function _getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }

        if (!empty($_SERVER['PATH_INFO'])) {
            return trim($_SERVER['PATH_INFO'], '/');
        }

        if (!empty($_SERVER['QUERY_STRING'])) {
            return trim($_SERVER['QUERY_STRING'], '/');
        }
        echo "NOT URI";
    }
}