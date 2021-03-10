<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeedbackRequest extends FormRequest
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
            'clientName' => 'required|max:255',
            'clientEmail' => 'required|max:255',
            'clientPhoneNumber' => 'required|max:150',
        ];
    }

    public function messages()
    {
        return [
            'clientName.required' => 'Имя не может быть пустым',
            'clientEmail.required'  => 'Email не может быть пустым',
            'clientPhoneNumber.required'  => 'Телефон не может быть пустым',
        ];
    }



}
