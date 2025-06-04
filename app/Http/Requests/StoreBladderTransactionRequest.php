<?php

namespace App\Http\Requests;

use App\Models\BladderTransaction;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class StoreBladderTransactionRequest extends FormRequest
{
    /**
     * The valid transaction sequence: Dismount → Maintenance → Test → Mount
     */
    protected const VALID_TRANSACTION_TYPES = ['Dismount', 'Maintenance', 'Test', 'Mount'];
    
    protected const TRANSACTION_SEQUENCE = [
        null => 'Dismount',
        'Dismount' => 'Maintenance',
        'Maintenance' => 'Test',
        'Test' => 'Mount',
        'Mount' => 'Dismount'
    ];

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
        $rules = [
            'TransactionType' => [
                'required',
                'string',
                'max:255',
                Rule::in(self::VALID_TRANSACTION_TYPES)
            ],
            'BladderId' => 'required|exists:Bladders,Id',
            'MachineId' => [
                'nullable',
                'exists:Machines,Id',
                function ($attribute, $value, $fail) {
                    // MachineId is required only for Mount transactions
                    if ($this->input('TransactionType') === 'Mount' && empty($value)) {
                        $fail('The machine field is required for Mount transactions.');
                    }
                },
            ],
            'Discriminator' => 'required|string|max:255',
            // CreatedAt is now automatically set in the controller
            'ChangedCopperElement' => 'boolean',
            'ChangedMainMandrillSeal' => 'boolean',
            'ChangedPiping' => 'boolean',
            'ChangedRotaryJoint' => 'boolean',
            'ChangedShoulderSeal' => 'boolean',
            'findings' => 'nullable|array',
            'findings.*' => 'exists:Finding,Id',
        ];
        
        // For Mount transactions, require Direction field
        if ($this->input('TransactionType') === 'Mount') {
            $rules['Direction'] = [
                'required',
                'string',
                Rule::in(['Left', 'Right'])
            ];
            
            // Override Discriminator rule - it will be set from Direction
            $rules['Discriminator'] = 'nullable|string|max:255';
        }
        
        return $rules;
    }
    
    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    // public function withValidator($validator)
    // {
    //     $validator->after(function ($validator) {
    //         $this->validateTransactionSequence($validator);
    //     });
    // }
    
    // /**
    //  * Validate that the transaction follows the required sequence:
    //  * Dismount → Maintenance → Test → Mount
    //  *
    //  * @param  \Illuminate\Validation\Validator  $validator
    //  * @return void
    //  */
    // protected function validateTransactionSequence($validator)
    // {
    //     $bladderId = $this->input('BladderId');
    //     $requestedTransactionType = $this->input('TransactionType');
        
    //     if (!$bladderId || !$requestedTransactionType) {
    //         return;
    //     }
        
    //     // Get the last transaction for this bladder
    //     $lastTransaction = BladderTransaction::where('BladderId', $bladderId)
    //         ->orderByDesc('CreatedAt')
    //         ->first();
            
    //     $lastTransactionType = $lastTransaction ? $lastTransaction->TransactionType : null;
    //     $expectedNextType = self::TRANSACTION_SEQUENCE[$lastTransactionType] ?? null;
        
    //     if ($requestedTransactionType !== $expectedNextType) {
    //         $message = $lastTransactionType 
    //             ? "Invalid transaction sequence. After a '{$lastTransactionType}' transaction, the next transaction must be '{$expectedNextType}'." 
    //             : "For a new bladder, the first transaction must be 'Dismount'.";
                
    //         $validator->errors()->add('TransactionType', $message);
    //     }
    // }
}
