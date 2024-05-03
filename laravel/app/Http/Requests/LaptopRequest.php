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
            'name'=>'',
            'title'=>'',
            'price'=>'',
            'discount'=>'',
            'type'=>'',
            'ram'=>'',
            'ssd'=>'',
            'processor_type'=>'',
            'processor_speed'=>'',
            'display_size_inch'=>'',
            'display_size_sm'=>'',
            'display_type'=>'',
            'display_resolution'=>'',
            'description'=>''
        ];
    }

}
