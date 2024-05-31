<?php
namespace App\Core\City;

use App\Models\City;
class CityRepository implements CityRepositoryInterface
{
    public function listAll()
    {

    }

    public function findByStateId($request)
    {
        return City::where('state_id', $request->state)
            ->get();
    }
}
