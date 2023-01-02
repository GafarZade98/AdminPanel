<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    protected $fillable = ['product_id', 'user_id', 'color', 'size', 'weight', 'quantity'];

    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id')->withDefault();
    }
}
