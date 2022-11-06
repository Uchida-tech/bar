<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlcoholRequest extends FormRequest
{
    public function rules()
    {
        return [
            'alcohol.name' => 'required|string|max:100',
            'alcohol.comment' => 'required|string|max:4000',
        ];
    }
}
