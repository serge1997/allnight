<?php
namespace App\Core\City;

interface CityRepositoryInterface
{
    public function listAll();
    public function findByStateId($request);
}
