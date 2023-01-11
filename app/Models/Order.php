<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['code', 'name', 'city', 'phone', 'zip', 'status', 'address', 'amount' , 'shipping'];

    public function product()
    {
        return $this->belongsToMany(Product::class)->withPivot(['quantity', 'features']);
    }

    public static function generateCustomCode($prefix = 'ORD', $digits = 8): string
    {
        do {
            $code = $prefix . str_pad(rand(0, pow(10, $digits) - 1), $digits, '0', STR_PAD_LEFT);
            if (! self::select('code')->whereCode($code)->exists()) {
                break;
            }
        } while (true);

        return $code;
    }

    public function statuses()
    {
        return [1=> 1, 2, 3, 4, 5];
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
