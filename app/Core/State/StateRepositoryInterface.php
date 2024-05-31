<?php
namespace App\Core\State;

use Illuminate\Support\Collection;

interface StateRepositoryInterface
{
    public function listAll(): Collection;
}
