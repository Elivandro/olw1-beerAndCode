<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'beer_name' => 'nullable|string',
            'malt' => 'nullable|string',
            'food' => 'nullable|string',
            'ibu_gt' => 'nullable|integer',
        ];
    }
}
