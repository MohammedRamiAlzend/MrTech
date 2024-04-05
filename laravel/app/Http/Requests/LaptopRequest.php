<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaptopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type'=>'required',
            'ram'=>'required',
            'ssd'=>'required',
            'processor_type'=>'required',
            'processor_speed'=>'required',
            'display_size_inch'=>'required',
            'display_size_sm'=>'required',
            'display_type'=>'required',
            'display_resolution'=>'required',
            'description'=>'required'
        ];
    }

}
