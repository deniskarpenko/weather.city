<?php

namespace app\model\db;

use Exception;


class City extends DbModel
{
    public function fillCitiesInDB($cities)
    {
        if($this->checkPDO()){
            $stmt = $this->pdo->prepare("INSERT INTO city(id, city) VALUES(?,?)");
            try {
                $this->pdo->beginTransaction();
                    foreach ($cities as $city){
                        $stmt->execute([$city->id, $city->name]);
                    }
                $this->pdo->commit();
            } catch (Exception $e){
                $this->pdo->rollback();
                throw $e;
            }
        }
    }

    public function getCitiesAll()
    {
        if($this->checkPDO()){
            $citiesData =$this->pdo->query('select * from city')->fetchAll();
           return $citiesData;
        }
    }
}