<?php

namespace app\migration;

use app\model\db\Migrate;

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
                Migrate::run(new $class);
            }
        }
     }

}