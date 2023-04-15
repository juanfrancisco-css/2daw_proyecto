<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //Importante cambiar a true para dar autorizacion de dar de alta nuevos usuarios
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //validaciones
        return [
            'email'=>'required|unique:users,email',                //lo requiere
            'username'=>'required|unique:users,username',         //lo requiere y ademas debera de ser unico
            'password'=>'required|min:8',                        //lo requiere y ademas debera de tener al menos 8 char
            'password_confirmation'=>'required|same:password',  //lo requiere y ademas debera de ser la misma de la clave

        ];
    }
}
