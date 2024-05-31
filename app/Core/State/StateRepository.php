<?php
namespace App\Core\State;

use App\Models\State;
use Illuminate\Support\Collection;

class StateRepository implements StateRepositoryInterface
{
    public function listAll() : Collection
    {
        return State::all();
    }
}
