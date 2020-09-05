<?php

namespace app\Controller;

abstract class Controller
{
    public function render(string $view)
    {
        $dir = get_class($this);
        if(preg_match('/^app\\\Controller\\\(.+)Controller/', $dir,$matches)){
            require __DIR__."/../view/".lcfirst($matches[1])."/$view.php";
        }
    }

    public function redirect(string $url)
    {
        header("Location: $url");
    }
}