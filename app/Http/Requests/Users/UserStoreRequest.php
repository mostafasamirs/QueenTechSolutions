<?php

namespace App\Http\Requests\Users;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        App::setlocale(Auth::user()->lang);
        return true;

    }

    public function messages()
    {
      return [
        'name.required' =>__('Please Insert Data'),
        'email.required' =>__('Please Insert Data'),
        'phone.required' =>__('Please Insert Data'),
        'password.required' =>__('Please Insert Data'),
        'password_confirmation.required' =>__('Please Insert Data'),
        'address.required' =>__('Please Insert Data'),
        'lang.required' =>__('Please Insert Data'),
        'image.required' =>__('Please Insert Photo'),
        'image.max' =>__('size too large 5 mb'),

        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'email' => 'required|unique:users,email,',
            'phone' => 'sometimes|unique:users,phone,',
            'password' => 'required|confirmed|min:8',
            'lang' => 'sometimes',
            'address' => 'sometimes',
            'created_by' => 'sometimes',

        ];
    }
}
