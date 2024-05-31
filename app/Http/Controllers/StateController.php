<?php

namespace App\Http\Controllers;

use App\Core\State\StateRepositoryInterface;
use Exception;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function __construct(
        protected StateRepositoryInterface $stateRepositoryInterface
    )
    {}

    public function onListAll()
    {
        try{
            return response()
                ->json($this->stateRepositoryInterface->listAll());
        }catch(Exception $e) {
            return response()
                ->json($e->getMessage());
        }
    }
}
