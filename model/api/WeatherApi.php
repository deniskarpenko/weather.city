<?php

namespace app\model\api;


class WeatherApi extends Api
{
    public function getWeather($idCity)
    {
       echo $this->conf['apiKey'];
    }
}