<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Factories\HasFactory, Model, Relations\HasMany, SoftDeletes};

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['category_id', 'name', 'image', 'keyword', 'description', 'is_active'];

    public function categories(): HasMany
    {
      return $this->hasMany(__CLASS__,'category_id');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
