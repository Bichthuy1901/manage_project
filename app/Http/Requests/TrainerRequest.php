<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Models\Trainers;

class TrainerRequest extends FormRequest
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
    public function rules(Request $request)
    {
        if ($this->isMethod('PUT')) {
            $arr = [
                'name' =>'required|max:255',
                'email'=> 'max:255|email|unique:trainers,email,'.$request->id,
                'trainer_code' => 'required|unique:trainers,trainer_code,'.$request->id,
                'address'=>'required|max:255',
                'gender'=>'required|numeric',
                'birthday'=>'required|date',
                'phone'=>'max:11|min:10|required',
                'orientation '=>'required',
                'note'=>'required',
                
            ];
            
            return $arr;
        }
        return [
            'name' =>'required|max:255',
            'email'=> 'max:255|email|unique:trainers',
            'trainer_code' => 'required|unique:trainers',
            'address'=>'required|max:255',
            'gender'=>'required|numeric',
            'birthday'=>'required|date',
            'phone'=>'max:11|min:10|required',
            'orientation'=>'required',
            'note'=>'required',
        ];
    }
}
