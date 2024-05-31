<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEstablishmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'                        => ['required'],
            'email'                       => ['required'],
            'establishment_type_id'       => ['required'],
            'cnpj'                        => ['required'],
            'password'                    => ['required'],
            'tel'                         => ['required'],
            'state_id'                    => ['required'],
            'city_id'                     => ['required'],
            'cep'                         => ['required'],
            'neightborhood'               => ['required']
        ];
    }
}
