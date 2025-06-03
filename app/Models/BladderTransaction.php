<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BladderTransaction extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'BladderTransactions';
    
    protected $primaryKey = 'Id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'TransactionType',
        'BladderId',
        'MachineId',
        'Discriminator',
        'CreatedAt',
        'ChangedCopperElement',
        'ChangedMainMandrillSeal',
        'ChangedPiping',
        'ChangedRotaryJoint',
        'ChangedShoulderSeal',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'ChangedCopperElement' => 'boolean',
        'ChangedMainMandrillSeal' => 'boolean',
        'ChangedPiping' => 'boolean',
        'ChangedRotaryJoint' => 'boolean',
        'ChangedShoulderSeal' => 'boolean',
    ];

    /**
     * Get the bladder that owns the transaction.
     */
    public function bladder()
    {
        return $this->belongsTo(Bladder::class, 'BladderId');
    }

    /**
     * Get the machine that owns the transaction.
     */
    public function machine()
    {
        return $this->belongsTo(Machine::class, 'MachineId');
    }

    /**
     * Get the maintenance findings for the transaction.
     */
    public function maintenanceFindings()
    {
        return $this->hasMany(MaintenanceFinding::class, 'MaintenanceTransactionId');
    }
    
    /**
     * The valid transaction sequence: Dismount → Maintenance → Test → Mount
     */
    public const VALID_TRANSACTION_TYPES = ['Dismount', 'Maintenance', 'Test', 'Mount'];
    
    /**
     * The sequence mapping for transaction types
     */
    public const TRANSACTION_SEQUENCE = [
        null => 'Dismount',
        'Dismount' => 'Maintenance',
        'Maintenance' => 'Test',
        'Test' => 'Mount',
        'Mount' => 'Dismount'
    ];
    
    /**
     * Get the next valid transaction type for a specific bladder
     *
     * @param int $bladderId
     * @return string|null
     */
    public static function getNextAllowedTransactionType($bladderId)
    {
        $lastTransaction = self::where('BladderId', $bladderId)
            ->orderByDesc('CreatedAt')
            ->first();
        
        // If there's a previous transaction, follow normal sequence
        if ($lastTransaction) {
            $lastType = $lastTransaction->TransactionType;
            return self::TRANSACTION_SEQUENCE[$lastType] ?? 'Dismount';
        }
        
        // If no transactions, check bladder state
        $bladder = Bladder::find($bladderId);
        if (!$bladder) {
            return 'Dismount'; // Default, though this shouldn't happen
        }
        
        // Special handling based on bladder state when no transactions exist
        switch ($bladder->Status) {
            case 'ready':
            case 'test':
                return 'Mount';
            case 'maintenance':
                return 'Test';
            case 'mounted':
            default:
                return 'Dismount'; // Default path if no special case applies
        }
    }
    
    /**
     * Check if a transaction type is valid as the next step
     *
     * @param int $bladderId
     * @param string $transactionType
     * @return bool
     */
    public static function isValidNextTransactionType($bladderId, $transactionType)
    {
        return self::getNextAllowedTransactionType($bladderId) === $transactionType;
    }
    
    /**
     * Check if the transaction is the latest one for its bladder
     *
     * @return bool
     */
    public function isLatestTransaction()
    {
        // Get the latest transaction for this bladder
        $latestTransaction = self::where('BladderId', $this->BladderId)
            ->orderByDesc('CreatedAt')
            ->first();
            
        // If there's no latest transaction or this is the latest, return true
        return $latestTransaction && $latestTransaction->Id === $this->Id;
    }
}
