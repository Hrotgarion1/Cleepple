<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStorePostblogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //He quitado el return y puesto una condicional para que no se pueda cambiar el id
        //del usuario en el input oculto de la vista(form::hidden del user id)
        //si el valor que mando en el user id coincide con el valor del usuario autentificado
        if($this->user_id == auth()->user()->id){
            return true;
            //si no coincide
        }else{
            //Accion no autorizada
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //Este request lo uso para la vista user/postsblog/create del controlador User/PostblogController
         //reglas para el status 1 (borrador)
         $rules = [
            'name' => 'required',
            //le indico único en la tabla blogposts al slug
            'slug' => 'required|unique:blogposts',
            //al campo status le indico que solo puede tener los valores 1 y 2
            'status' => 'required|in:1,2',
            //el campo file si existe debe de ser de tipo image
            'file' => 'image'
        ];

        //reglas para el status 2 (publicado), estas dos reglas estan fusionadas con el $rules = array_merge
        if($this->status == 2){
           $rules = array_merge($rules, [
               'typepost_id' => 'required',
               'categoriapost_id' => 'required',
               'province_id' => 'required',
               'profesiones_id' => 'required',
               'especializaciones_id' => 'required',
               'extract' => 'required',
               'body' => 'required'
           ]);
        }

        return $rules;
    }
}
