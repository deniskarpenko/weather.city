<?php

namespace app\model\api;


class WeatherApi extends Api
{
    public function getWeather($idCity)
    {
        $apiKey = $this->conf['apiKey'];
        $url = "http://api.openweathermap.org/data/2.5/weather?id=$idCity&appid=$apiKey&lang=ru";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//для возврата результата в виде строки, вместо прямого вывода в браузер
        $weather = curl_exec($ch);
        curl_close($ch);

        return $weather;
    }
}