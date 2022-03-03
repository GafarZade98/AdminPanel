<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Factories\HasFactory, Model, SoftDeletes};

class Permission extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];
}
