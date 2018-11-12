<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'names'=>'required|max:200',
            'email'=>'required|email|max:100',
            'service_required'=>'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'names.required' => 'El campo de Nombres y Apellidos es obligatorio',
            'email.required'  => 'El campo Email es obligatorio',
            'email.email'  => 'El formato del Email es incorrecto',
            'service_required.required'  => 'Recuerde seleccionar un servicio',
        ];
    }
}
