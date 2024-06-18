<?php
namespace App\Core\ImageEstablishment;

interface ImageEstablishmentRepositoryInterface
{
    public function create($request);
    public function listAll();
}
