<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlcoholRequest extends FormRequest
{
    public function rules()
    {
        return [
            'alcohol.title' => 'required|string|max:100',
            'alcohol.body' => 'required|string|max:4000',
        ];
    }
}
