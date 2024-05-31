<?php

namespace App\Http\Controllers;

use App\Core\ImageEstablishment\ImageEstablishmentRepositoryInterface;
use Exception;
use Illuminate\Http\Request;

class ImageEstablishmentController extends Controller
{
    public function __construct(
        protected ImageEstablishmentRepositoryInterface $imageEstablishmentRepositoryInterface
    ){}

    public function OnCreate(Request $request)
    {
        try{
            $this->imageEstablishmentRepositoryInterface->create($request);
            return response()
                ->json("Image(ns) registradas com successo");
        }catch(Exception $e){
            return response()
                ->json($e->getMessage(), 500);
        }
    }
}
