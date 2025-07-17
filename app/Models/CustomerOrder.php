<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    public function customer()
{
    return $this->belongsTo(Customer::class);
}

public function items()
{
    return $this->hasMany(CustomerOrderItem::class, 'order_id');
}

}
