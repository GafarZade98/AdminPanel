<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Factories\HasFactory, Relations\BelongsTo, SoftDeletes};
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static get()
 * @method static create(array $validated)
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = ['name', 'email', 'password', 'phone', 'avatar', 'role_id', 'company', 'country', 'address', 'about', 'is_admin'];
    protected $casts = ['email_verified_at' => 'datetime'];
    protected $hidden = ['password', 'remember_token'];

    public function role() :BelongsTo
    {
        return $this->belongsTo(Role::class)->withDefault();
    }

    public function setPhoneAttribute($value): ?string
    {
        return $this->attributes['phone'] = phone_cleaner($value);
    }

    public function getPhoneAttribute($value): ?string
    {
        return phone_formatter($value, true);
    }
}

