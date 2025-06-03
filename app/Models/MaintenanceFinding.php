<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceFinding extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'MaintenanceFindings';
    
    protected $primaryKey = 'Id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'MaintenanceTransactionId',
        'FindingId',
    ];

    /**
     * Get the bladder transaction that owns the maintenance finding.
     */
    public function maintenanceTransaction()
    {
        return $this->belongsTo(BladderTransaction::class, 'MaintenanceTransactionId');
    }

    /**
     * Get the finding that owns the maintenance finding.
     */
    public function finding()
    {
        return $this->belongsTo(Finding::class, 'FindingId');
    }
}
