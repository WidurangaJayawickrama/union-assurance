<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'nic_no' => ['required', 'max:10','unique:customers'],
            'email' => ['required', 'string', 'email', 'max:255','unique:customers'],
            'contact_no' => ['required','digits:10','unique:customers'],
        ];
    }
}
