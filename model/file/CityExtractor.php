<?php

namespace app\model\file;


class CityExtractor
{
    public function extractCitiesByCountry($country='UA')
    {
        $cities = $this->getListCities();
        $citiesFilter = [];
            foreach ($cities as $city){
                if ($city->country == $country) {
                    $citiesFilter[]= $city;
                }
            }
        return $citiesFilter;
    }

    protected function getListCities()
    {
        $content = file_get_contents(__DIR__.'/../../source/city.list.json');
        return json_decode($content);
    }
}