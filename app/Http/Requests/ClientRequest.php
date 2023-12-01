<?php

namespace App\Http\Requests;

use App\Rules\Dash;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function sanitize(){
        $data = $this->all();
        $data['name'] = str_replace('-', ' ', $data['name']);
        
        $this->replace($data);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        #$this->sanitize();
        return [
            'name' => ['required', 'max:100', 'min:3', new Dash],
            'email' => ['required', 'email', 'unique:clients'],
            'age' => ['required', 'integer'],
            'photo' => ['required', 'mimes:jpeg,bmp,png']
        ];
    }


    // public function withValidator($validator){
    //     $validator->after(function($validator){
    //         if(strpos($this->name, '-')){
    //             $validator->errors()->add('name', 'O campo nome não pode ter traço.');
    //         }
    //     });
    // }
    

    /**
     * Define descrições manuais das regras de validação
     * 
     * @return void
     */
    public function messages()
    {
        return [
            'name.required' => "O campo nome do cliente deve ser preenchido."
        ];
    }
}
