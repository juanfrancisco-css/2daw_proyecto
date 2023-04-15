<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//Importar esta libreria 
//en ella hay unos modulos para validaciones
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
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
            'username'=>'required',
            'password'=>'required'
        ];
    }

    public function getCredentials(){

        $username = $this->get('username');

        if($this->isEmail($username)){
           return [
            'email'=> $username,
            'password'=> $this->get('password')
           ];
        }

        //si no se cumple 
        //solo estamos regrensando email o password o username o password
        return $this->only('username','password');
    }

    public function isEmail($value){
//Puede hacerse con una expresion regular pero como importamos la libreria 'Factory'  utilizamos sus methodos
        $factory = $this->container->make(ValidationFactory::class);

        /*
        methodo 'make' tiene dos parametros :
        1) el primero es el valor , la variable a examinar
        2) y el segundo la regla , podemos decirle que sea (min:3)
        */

        //si falla la validacion regresemos el valor opuesto
        //este method make me devuelve un objeto de tipo validator tiene un method llamado fails() 
        //al compararlo con un correo electronico si esto falla devolvera true  asi que negamos el valor para devolver lo opuesto  
        return !$factory->make(['username'=>$value],['username'=>'email'])->fails();
    //regresa n valor booleano 
    }
}
