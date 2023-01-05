<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name','city', 'phone', 'zip', 'status'];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function statuses()
    {
        return [1=> 1, 2 ,3, 4, 5];
    }

}
