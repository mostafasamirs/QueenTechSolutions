<?php

namespace App\Http\Requests\Tasks;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class TasksRequest extends FormRequest
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
        'description.required' =>__('Please Insert Data'),
        'file.required' =>__('Please Insert Photo'),
        'file.max' =>__('size too large 5 mb'),

      ];


    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        $rules = [
            'name' => 'sometimes',
            'description' => 'sometimes',
            'file' => 'sometimes|file|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,txt,xlsx,csv,xls|max:5000',

        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {

            $rules = [
                'name' => 'sometimes',
                'description' => 'sometimes',
                'file' => 'sometimes|file|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,txt,xlsx,csv,xls|max:5000',
            ];

        }//end of if

        return $rules;

    }//end of rules




}
