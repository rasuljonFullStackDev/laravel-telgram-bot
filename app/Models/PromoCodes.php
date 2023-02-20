<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoCodes extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'hosting',
        'domain',
        'vds',
        'vps',
        'sms',
        'discount',
        'status',
        'code',
        'limit',
        'limit_res'
    ];
}
