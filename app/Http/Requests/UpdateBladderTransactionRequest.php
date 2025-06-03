<?php

namespace App\Http\Requests;

use App\Models\BladderTransaction;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBladderTransactionRequest extends FormRequest
{
    /**
     * The valid transaction types
     */
    protected const VALID_TRANSACTION_TYPES = ['Dismount', 'Maintenance', 'Test', 'Mount'];

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
            'TransactionType' => [
                'required',
                'string',
                'max:255',
                Rule::in(self::VALID_TRANSACTION_TYPES)
            ],
            'BladderId' => 'required|exists:Bladders,Id',
            'MachineId' => 'nullable|exists:Machines,Id',
            'Discriminator' => 'required|string|max:255',
            'ChangedCopperElement' => 'boolean',
            'ChangedMainMandrillSeal' => 'boolean',
            'ChangedSecondaryMandrillSeal' => 'boolean',
            'ChangedBladderBottomSeal' => 'boolean',
            'ChangedAirValve' => 'boolean',
        ];
    }
    
    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $this->validateTransactionTypeChange($validator);
        });
    }
    
    /**
     * Validate that the transaction type isn't being changed.
     * Transaction types cannot be modified after creation to maintain sequence integrity.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    protected function validateTransactionTypeChange($validator)
    {
        // Get the current transaction
        $transaction = $this->route('bladderTransaction');
        
        // If the transaction type is being changed
        if ($transaction && $this->filled('TransactionType') && $transaction->TransactionType !== $this->input('TransactionType')) {
            $validator->errors()->add(
                'TransactionType',
                'Transaction type cannot be changed after creation to maintain sequence integrity.'
            );
        }
        
        // If the bladder ID is being changed
        if ($transaction && $this->filled('BladderId') && $transaction->BladderId !== $this->input('BladderId')) {
            $validator->errors()->add(
                'BladderId',
                'Bladder ID cannot be changed after the transaction is created.'
            );
        }
    }
}
