<?php

namespace App\Http\Requests\Users;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
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
            'phone' => 'sometimes|unique:users,phone,'.$this->id.'',
            'email' => 'sometimes|unique:users,email,'.$this->id.'',
            'password' => 'sometimes|confirmed',
            'address' => 'sometimes',
            'lang' => 'sometimes',
            'created_by' => 'sometimes',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image.max' =>__('size too large 5 mb'),

        ];
    }
}
