<?php


namespace app\migration;


interface Migration
{
    /*возвращает sql код для выполнения*/
    public static function run():string;
}