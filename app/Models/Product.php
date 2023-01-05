<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['category_id', 'code', 'is_active', 'description', 'quantity', 'keyword', 'weight', 'stock', 'price', 'color', 'image', 'name', 'size', 'tax',];

    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }
    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
    public static function generateCustomCode($prefix = 'SPN', $digits = 8): string
    {
        do {
            $code = $prefix . str_pad(rand(0, pow(10, $digits) - 1), $digits, '0', STR_PAD_LEFT);
            if (! self::select('code')->withTrashed()->whereCode($code)->exists()) {
                break;
            }
        } while (true);

        return $code;
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
