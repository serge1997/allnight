<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\User\UserRepositoryInterface;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function __construct(
        private UserRepositoryInterface $userRepositoryInterface
    ){}

    public function onCreate(StoreUserRequest $request)
    {

    }

    public function onUpdate(StoreUserRequest $request)
    {

    }
}
