<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // SI DEVE DARE L AUTORIZZAZIONE PER USARE QUESTE FUNZIONI
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
            'title' => 'required|min:3|max:60',
            'image' => 'required|min:3|max:255',
            'type' => 'required|min:3|max:50',
        ];
    }

    // public function messages(){
    //     return [
    //         'title.required' => 'Il campo non può essere vuoto.',
    //         'title.min' => 'Il campo non può avere meno di :min caratteri.',
    //         'title.max' => 'Il titolo non può essere più lungo di :max.',
    //         'image.required' => 'Il campo non può essere vuoto.',
    //         'image.min' => 'Il campo non può avere meno di :min caratteri.',
    //         'image.max' => 'Il link non può essere più lungo di :max.',
    //         'type.required' => 'Il campo non può essere vuoto.',
    //         'type.min' => 'Il campo non può avere meno di :min caratteri.',
    //         'type.max' => 'Il tipo non può essere più lungo di :max.'
    //     ];
    // }
}
