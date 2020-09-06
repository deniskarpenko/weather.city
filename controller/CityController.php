<?php

namespace app\controller;

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
        echo __METHOD__;
    }
}