<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MyRequest extends Request
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
    //protected $redirect = 'tran';
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
  public function rules()
{
    return [
        
        //'d' => 'required',
    ];
}

 public function messages()
{
    return [
        
        //'d.required'  => 'A message is required',
    ];
}
}