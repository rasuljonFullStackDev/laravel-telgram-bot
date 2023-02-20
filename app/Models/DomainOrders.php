<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainOrders extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'domain_id',
        'user_id',
        'domain_price',
        'user',
        'domain',
        'status'
    ];
}
