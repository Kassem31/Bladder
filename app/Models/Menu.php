<?php
namespace App\Models;


use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'route', 'parent_id', 'order', 'permission', 'translation_key'];

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('order');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function isAccessibleBy($user)
    {
        if (!$this->permission || $user->is_super_admin) {
            return true;
        }
        return $user->hasPermission($this->permission);
    }

    
    public function getSvgUrlAttribute()
    {
        return url('storage/' . $this->svg);
    }

    public function getSvgContentAttribute()
    {
        $path = public_path($this->svg);
        return File::exists($path) ? File::get($path) : '';
    }
    
    public function getTranslatedNameAttribute()
    {
        if (!empty($this->translation_key)) {
            return __('app.' . $this->translation_key);
        }
        
        return $this->name;
    }
}
