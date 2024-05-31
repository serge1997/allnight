<?php
namespace App\Core\Establishment;
use App\Models\Establishment;
interface EstablishmentRepositoryInterface
{
    public function create($request);
    public function storeImages($request);
}
