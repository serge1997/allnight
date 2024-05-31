<?php

namespace App\Http\Controllers;

use App\Core\Establishment\EstablishmentRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEstablishmentRequest;
use Exception;

class EstablishmentController extends Controller
{
    public function __construct(
        protected readonly EstablishmentRepositoryInterface $establishmentRepositoryInterface
    ){}

    public function onCreate(StoreEstablishmentRequest $request)
    {
        $request->validated();
        try{
            $response = "Estabelecimento criado com successo";
            $this->establishmentRepositoryInterface->create($request);
            return response()
                ->json($response);
        }catch(Exception $e){
            return response()
                ->json($e->getMessage(), 500);
        }
    }
}
