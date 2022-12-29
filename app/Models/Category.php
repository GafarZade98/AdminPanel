<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['category_id', 'name', 'image', 'keyword', 'description', 'is_active'];

    public function category()
    {
      return $this->belongsTo(self::class)->withDefault();
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
