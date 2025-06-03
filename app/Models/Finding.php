<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finding extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Finding';
    
    protected $primaryKey = 'Id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'IconClass',
        'Description',
    ];

    /**
     * Get the maintenance findings for the finding.
     */
    public function maintenanceFindings()
    {
        return $this->hasMany(MaintenanceFinding::class, 'FindingId');
    }
}
