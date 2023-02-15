<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LabcreateRequest extends FormRequest
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
            'lab_name'=>'required',
            'address1'=>'required',
            'state'=>'required',
            'city'=>'required',
            'pin'=>'required|numeric|max:6',
            'phone'=>'required|numeric|max:10',
            'image'=>'required',
            'status'=>'required'
        ];
    }
}
