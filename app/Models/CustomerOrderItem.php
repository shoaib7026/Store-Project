<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerOrderItem extends Model
{
 public function order()
{
    return $this->belongsTo(CustomerOrder::class, 'order_id');
}


}
