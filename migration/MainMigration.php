<?php

namespace app\migration;

class MainMigration
{
     public static function run()
     {
         $migrations = array_filter(scandir(__DIR__), function($migration){
             return preg_match('/.+?\.php$/', $migration);
         });
        foreach ($migrations as $migration){
            $fileExtension = explode('.', $migration);
            $class = 'app\\migration\\'.$fileExtension[0];
            if(class_exists($class) && $fileExtension[0]!= 'MainMigration'){
               $class::run();
            }
        }
     }

}