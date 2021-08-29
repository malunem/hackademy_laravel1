<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'contact-fullname'=>'required|between:3,50',
            'contact-email'=>'required|email:rfc,dns',
            'contact-message'=>'required|between:15,500'
        ];
    }

    public function messages() {
        return [
            'contact-fullname.required'=>'Non è stato inserito il nome',
            'contact-fullname.between'=>'Il nome inserito è troppo corto oppure troppo lungo',
            'contact-email.required'=>'Non è stato inserito un indirizzo email',
            'contact-email.email'=>'Inserire un indirizzo email valido',
            'contact-message.required'=>'Non è stato inserito un messaggio',
            'contact-message.between'=>'Il messaggio inserito è troppo corto oppure troppo lungo'
        ];
    }
}
