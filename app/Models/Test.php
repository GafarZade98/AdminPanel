<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $validated)
 */
class Test extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'detail'];
}
