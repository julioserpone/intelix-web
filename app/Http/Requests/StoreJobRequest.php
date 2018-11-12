<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
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
            'document'=>'mimes:pdf,doc,docx|max:500'    //max=kb en caso de archivos
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
            'document.mimes'  => 'Solo puede adjuntar archivos PDF y Documentos de Word',
            'document.max'  => 'El archivo adjunto no puede pesar más de 500Kb de tamaño',
        ];
    }
}
