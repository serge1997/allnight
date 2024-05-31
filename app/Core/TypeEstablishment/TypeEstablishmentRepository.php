<?php
namespace App\Core\TypeEstablishment;

use App\Models\TypeEstablishment;

class TypeEstablishmentRepository implements TypeEstablishmentRepositoryInterface
{
    public function listAll()
    {
        return TypeEstablishment::all();
    }
}
