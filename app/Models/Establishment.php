<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'establishments';
    protected $guard = 'establishment';

    protected $fillable = [
        'name',
        'email',
        'establishment_type_id',
        'cnpj',
        'password',
        'tel',
        'state_id',
        'city_id',
        'cep',
        'neightborhood'
    ];
}
