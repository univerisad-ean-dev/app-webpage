<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

             'name' => 'required',
             'type_order_id' => 'required',
             'pet_type_id' => 'required',
             'city_id' => 'required',
             'cc' => 'required',
             'email' => 'required|email',
             'date' => 'required|date',
             'total' => 'required|numeric',
             'payment_method' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array{
        return [
            'name.required' => 'El nombre es requerido',
            'type_order_id.required' => 'El tipo de orden es requerido',
            'pet_type_id.required' => 'El tipo de mascota es requerido',
            'city_id.required' => 'La ciudad es requerida',
            'cc.required' => 'La cedula es requerida',
            'email.required' => 'El email es requerido',
            'email.email' => 'El email no es valido',
            'date.required' => 'La fecha es requerida',
            'date.date' => 'La fecha no es valida',
            'total.required' => 'El total es requerido',
            'total.numeric' => 'El total no es valido',
            'payment_method.required' => 'El metodo de pago es requerido'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json(['errors' => $validator->errors()], 422)
        );
    }
}
