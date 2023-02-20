<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainTypes extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'goverment',
        'year_price',
        'discount',
        'status'
    ];
}
