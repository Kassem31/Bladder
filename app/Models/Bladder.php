<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bladder extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Bladders';
    
    protected $primaryKey = 'Id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'BladderCode',
        'ExpiryDate',
        'Status',
        'ExpiryNotificationSent',
        'BladderSizeId',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'ExpiryDate' => 'datetime',
        'ExpiryNotificationSent' => 'boolean',
    ];

    /**
     * Get the bladder size that owns the bladder.
     */
    public function bladderSize()
    {
        return $this->belongsTo(BladderSize::class, 'BladderSizeId');
    }

    /**
     * Get the bladder transactions for the bladder.
     */
    public function bladderTransactions()
    {
        return $this->hasMany(BladderTransaction::class, 'BladderId');
    }

    /**
     * Get the machines where this bladder is used as left bladder.
     */
    public function leftMachines()
    {
        return $this->hasMany(Machine::class, 'LeftBladderId');
    }

    /**
     * Get the machines where this bladder is used as right bladder.
     */
    public function rightMachines()
    {
        return $this->hasMany(Machine::class, 'RightBladderId');
    }
    
    /**
     * Get the last transaction for this bladder.
     *
     * @return \App\Models\BladderTransaction|null
     */
    public function getLastTransactionAttribute()
    {
        return $this->bladderTransactions()
            ->orderByDesc('CreatedAt')
            ->first();
    }
    
    /**
     * Get the current status of the bladder based on its last transaction.
     *
     * @return string
     */
    public function getCurrentStatusAttribute()
    {
        $lastTransaction = $this->last_transaction;
        
        if (!$lastTransaction) {
            return 'New';
        }
        
        return $lastTransaction->TransactionType;
    }
    
    /**
     * Get the next allowed transaction type for this bladder.
     *
     * @return string
     */
    public function getNextAllowedTransactionAttribute()
    {
        return BladderTransaction::getNextAllowedTransactionType($this->Id);
    }
}
