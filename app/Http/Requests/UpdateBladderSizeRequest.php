<?php

namespace App\Http\Requests;

use App\Models\BladderSize;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBladderSizeRequest extends FormRequest
{

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
            'Name' => 'required|string|max:255|unique:BladderSizes,Name,' . $this->route('bladder_size')->Id,
        ];
    }
}
