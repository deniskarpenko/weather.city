<?php

namespace app\model\db;


class Weather extends DbModel
{
    public function saveWeather($id ,$weather)
    {
        if($this->checkPDO()){
            $sql = "insert into weather(city_id, params, date_weather) values ('$id','$weather', now())";
            $this->pdo->exec($sql);
            print_r($this->pdo->errorInfo());
        }
    }
}