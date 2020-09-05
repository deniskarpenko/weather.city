<?php

namespace app\Controller;

abstract class Controller
{
    public function render($view)
    {
        $dir = get_class($this);
        if(preg_match('/^app\\\Controller\\\(.+)Controller/', $dir,$matches)){
            require __DIR__."/../view/".lcfirst($matches[1])."/$view.php";
        }
    }
}