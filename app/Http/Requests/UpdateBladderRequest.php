<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBladderRequest extends FormRequest
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
            'BladderCode' => 'required|string|max:255|unique:Bladders,BladderCode,' . $this->route('bladder')->Id,
            'ExpiryDate' => 'required|date',
            'Status' => 'required|string|max:255',
            'ExpiryNotificationSent' => 'boolean',
            'BladderSizeId' => 'required|exists:BladderSizes,Id',
        ];
    }
}
