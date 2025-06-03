<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMachineRequest extends FormRequest
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
            'Code' => 'required|string|max:255|unique:Machines,Code,' . $this->route('machine')->Id,
            'Full' => 'boolean',
            'LeftBladderId' => 'nullable|exists:Bladders,Id',
            'RightBladderId' => 'nullable|exists:Bladders,Id',
        ];
    }
}
