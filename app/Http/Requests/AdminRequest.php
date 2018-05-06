<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
        if ($this->isMethod('PUT')) {
            $arr = [
                'name' =>'required|max:255',
                'email'=> 'max:255|email|unique:admins,email,'.$request->id,
                'phone'=>'max:11|min:10|required',
            ];
            
            return $arr;
        }
        return [
            'name' =>'required|max:255',
            'email'=> 'max:255|email|unique:admins',
            'phone'=>'max:11|min:10|required',
        ];
    }
}
