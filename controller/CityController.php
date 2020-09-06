<?php

namespace app\controller;

use app\model\file\CityExtractor;

class CityController extends Controller
{
    public function actionForm()
    {
        $cityExtractor = new CityExtractor();
        $cities = $cityExtractor->extractCitiesByCountry();
       print_r($cities);
    }
}