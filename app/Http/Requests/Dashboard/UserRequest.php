<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        switch($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST':
                return [
                    'name' => 'required|string|max:70|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s])',
                    'last_name' => 'nullable|string|max:70|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s])',
                    'email' => 'required|email|unique:users|max:70|regex:(^[^@]+@[^@]+\.[a-zA-Z]{2,}$)|unique:users,email',
                    'phone' => 'required|numeric|min:10',
                    'roles' => 'required',
                    'password' => 'required|min:5|max:30|regex:(^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8,}$)',
                    'image' => ['image','mimes:jpeg,jpg,png,gif','max:2048',Rule::dimensions()->maxWidth(550)->maxHeight(550)],
                ];
            case 'PUT':
                return [
                    'name' => 'required|string|max:70',
                    'last_name' => 'nullable|string|max:70',
                    'email' => 'required|email|max:70|unique:users,email,'.$this->user->id,
                    'phone' => 'required|numeric|min:10',
                    'roles' => 'required',
                    'password' => 'nullable|min:5|max:30',
                    'image' => ['image','mimes:jpeg,jpg,png,gif','max:2048',Rule::dimensions()->maxWidth(550)->maxHeight(550)],
                ];
            case 'PATCH':
            default:break;
        }
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'Nombre',
            'last_name' => 'Apellido',
            'email' => 'Correo',
            'phone' => 'Teléfono',
            'roles' => 'Roles',
            'image' => 'Imagen',
            'password' => 'Contraseña',
        ];
    }
}
