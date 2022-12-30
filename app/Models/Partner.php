<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Factories\HasFactory, Model};

class Partner extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'ordering', 'is_active'];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
