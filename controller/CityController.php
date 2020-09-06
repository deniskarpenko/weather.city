<?php

namespace app\controller;

use app\model\api\WeatherApi;
use app\model\db\City;
use app\model\file\CityExtractor;

class CityController extends Controller
{
    public function actionForm()
    {
        $cityExtractor = new CityExtractor();
        $cities = $cityExtractor->extractCitiesByCountry();
        $cityModel = new City();
        $cityModel->fillCitiesInDB($cities);
    }

    public function actionGetCities()
    {
        $city = new City();
        echo json_encode($city->getCitiesAll());
    }

    public function actionGetWeather()
    {
        $api = new WeatherApi();
        $api->getWeather($_GET['id']);
       // print_r($_GET);
    }
}