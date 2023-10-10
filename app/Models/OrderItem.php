<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'order_id';

     public function itemName(){
    return $this->belongsTo(item::class);
    }
}
