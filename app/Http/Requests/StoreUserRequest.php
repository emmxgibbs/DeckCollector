<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|min:5|max:30',
            'password' => 'required|min:5|max:50',
            'email' => 'required|min:5|max:30',
            'name' => 'required|min:1|max:100'
        ];
    }
}
