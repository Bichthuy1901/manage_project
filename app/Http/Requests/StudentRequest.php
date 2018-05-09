<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Models\Trainers;

class StudentRequest extends FormRequest
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
        dd($request);
        if ($this->isMethod('PUT')) {
            $arr = [
                'name' =>'required|max:255',
                'email'=> 'max:255|email|unique:students,email,'.$request->id,
                'address'=>'required|max:255',
                'gender'=>'required|numeric',
                'birthday'=>'required|date',
                'phone'=>'max:11|min:10|required',
                'branch_id'=>'required|numeric',
                'student_code'=>'required|unique:students,student_code,'.$request->id,
                'class_id'=>'required|numeric',
                'course_id'=>'required|numeric'
            ];
            
            return $arr;
        }
        return [
            'name' =>'required|max:255',
            'email'=> 'max:255|email|unique:students',
            'address'=>'required|max:255',
            'gender'=>'required|numeric',
            'birthday'=>'required|date',
            'phone'=>'max:11|min:10|required',
            'branch_id'=>'required|numeric',
            'student_code'=>'required|unique:students',
            'class_id'=>'required|numeric',
            'course_id'=>'required|numeric'
        ];
    }
}
