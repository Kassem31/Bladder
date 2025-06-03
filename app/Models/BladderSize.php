<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BladderSize extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'BladderSizes';
    
    protected $primaryKey = 'Id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Name',
    ];

    /**
     * Get the bladders for the bladder size.
     */
    public function bladders()
    {
        return $this->hasMany(Bladder::class, 'BladderSizeId');
    }
}
