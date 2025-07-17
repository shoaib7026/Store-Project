<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Mass assignment allowed fields
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'postal_code',
    ];

    public function orders()
    {
        return $this->hasMany(CustomerOrder::class);
    }
}
