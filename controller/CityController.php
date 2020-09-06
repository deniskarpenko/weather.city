<?php

namespace app\controller;

use app\model\api\WeatherApi;
use app\model\db\City;
use app\model\db\Weather;
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
        $weather = $api->getWeather($_GET['id']);
        $model = new Weather();
        $model->saveWeather($_GET['id'], $weather);
    }
}