<?php

namespace App\Http\Requests\Agent;

use Illuminate\Foundation\Http\FormRequest;

class StoreProviderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|min:3|max:20',
            'last_name' => 'required|min:3|max:20',
            'email' => 'required|email|max:320',
            'mobile' => 'required|string|',
            'password' => 'required|min:8',
            'avatar' => 'sometimes|file|max:2048',
        ];
    }
}
