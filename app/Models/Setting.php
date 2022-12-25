<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Factories\HasFactory, Model};

/**
 * @method static create(array $validated)
 */
class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['key', 'value', 'description', 'type', 'ordering', 'status'];
}
