<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateWorkoutFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {   
        $id =$this->id??'';
        
           $rules = [
                'exercise'=>'string|max:50|',
                'sets'=>'integer',
                'reps'=>'integer',
                'weight'=>'integer',
                'rest'=>'integer',
                'obs'=>'string',
           ];

           if($this->method('PUT')){
                $rules = [
                    'exercise'=>'nullable|string',
                    'sets'=>'nullable|integer',
                    'reps'=>'nullable|integer',
                    'weight'=>'nullable|integer',
                    'rest'=>'nullable|integer',
                    'obs'=>'nullable|string',
                ];
           }
        return $rules;
    }
}
