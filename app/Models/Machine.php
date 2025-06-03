<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Machines';
    
    protected $primaryKey = 'Id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Code',
        'Full',
        'LeftBladderId',
        'RightBladderId',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'Full' => 'boolean',
    ];

    /**
     * Get the left bladder for the machine.
     */
    public function leftBladder()
    {
        return $this->belongsTo(Bladder::class, 'LeftBladderId');
    }

    /**
     * Get the right bladder for the machine.
     */
    public function rightBladder()
    {
        return $this->belongsTo(Bladder::class, 'RightBladderId');
    }

    /**
     * Get the bladder transactions for the machine.
     */
    public function bladderTransactions()
    {
        return $this->hasMany(BladderTransaction::class, 'MachineId');
    }
    
    /**
     * Check if the machine is working (has both left and right bladders).
     */
    public function getIsWorkingAttribute()
    {
        return !is_null($this->LeftBladderId) && !is_null($this->RightBladderId);
    }
    
    /**
     * Check if the machine is stopped (missing one or both bladders).
     */
    public function getIsStoppedAttribute()
    {
        return is_null($this->LeftBladderId) || is_null($this->RightBladderId);
    }
    
    /**
     * Override the getFull attribute to ensure it always reflects the current state.
     */
    public function getFullAttribute($value)
    {
        // Always calculate based on current bladder assignments
        return !is_null($this->LeftBladderId) && !is_null($this->RightBladderId);
    }
    
    /**
     * Before saving, update the Full attribute based on bladder assignments.
     */
    protected static function booted()
    {
        static::saving(function ($machine) {
            $machine->Full = !is_null($machine->LeftBladderId) && !is_null($machine->RightBladderId);
        });
    }
    
    /**
     * Get the status text for the machine.
     *
     * @return string
     */
    public function getStatusTextAttribute()
    {
        return $this->is_working ? 'Working' : 'Stopped';
    }
}
