<?php
namespace App\Core\Establishment;

use App\Models\Establishment;
use Illuminate\Support\Facades\Hash;

class EstablishmentRepository implements EstablishmentRepositoryInterface
{
    public function create($request)
    {
        $establishment = new Establishment($request->validated());
        $establishment->password = Hash::make($request->password);
        $establishment->save();
    }

    public function storeImages($request)
    {

    }
}
