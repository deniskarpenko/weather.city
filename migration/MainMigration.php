<?php

namespace app\migration;

class MainMigration
{
     public static function run()
     {
         $migrations = array_filter(scandir(__DIR__), function($migration){
             return preg_match('/.+?\.php$/', $migration);
         });
         print_r($migrations);
     }

}