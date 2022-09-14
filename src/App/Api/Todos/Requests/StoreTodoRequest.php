<?php

namespace App\Api\Todos\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTodoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'description' => ['nullable'],
            'completed' => ['boolean'],
        ];
    }
}
