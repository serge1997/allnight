<?php

namespace App\Http\Controllers;

use App\Core\TypeEstablishment\TypeEstablishmentRepository;
use Exception;
use Illuminate\Http\Request;

class TypeEstablishmentController extends Controller
{
    public function __construct(
        protected readonly TypeEstablishmentRepository $typeEstablishmentRepository
    )
    {}

    public function onListAll()
    {
        try{
            return response()
                ->json($this->typeEstablishmentRepository->listAll());
        }catch(Exception $e){
            return response()
                ->json($e->getMessage(), 500);
        }
    }
}
