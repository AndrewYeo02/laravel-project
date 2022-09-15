<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTraineeRequest extends FormRequest
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
        // check http method
        $method = $this -> method();
        if($method == 'PUT'){
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required','email'],
            'date_of_birth' => ['required', 'date_format:Y-m-d'],
        ];
     } else{
        return[
            'first_name' => ['sometimes','required'],
            'last_name' => ['sometimes','required'],
            'email' => ['sometimes','required','email'],
            'date_of_birth' => ['sometimes','required', 'date_format:Y-m-d'],
        ]; 
     }
    }
    protected function prepareForValidation(){
        if($this->DOB){
            $this->merge([
                'date_of_birth' => $this-> DOB
            ]);
        }
    }
}
