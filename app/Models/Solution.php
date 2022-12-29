<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'title', 'description', 'link', 'ordering', 'is_active', ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
