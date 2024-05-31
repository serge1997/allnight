<?php

namespace App\Http\Controllers;

use App\Core\City\CityRepositoryInterface;
use Exception;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct(
        protected readonly CityRepositoryInterface $cityRepositoryInterface
    )
    {}

    public function onfindByStateId(Request $request)
    {
        try{
            return response()
                ->json($this->cityRepositoryInterface->findByStateId($request));
        }catch(Exception $e){
            return response()
                ->json($e->getMessage(), 500);
        }
    }
}
