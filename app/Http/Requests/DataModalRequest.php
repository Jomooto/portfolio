<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataModalRequest extends FormRequest
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
                'cv' => 'required|url|max:255',
                'picture' => 'required|url|max:255',
                'descriptionTitle' => 'required|max:255',
                'description' => 'required',
                'github' => 'required|url|max:255',
                'linkedin' => 'url|max:255',
                'contactEmail' => 'required|email|max:255',
        ];
    }
}
