<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostings extends Model
{
    use HasFactory;
    protected $fillable = [
        'ssd',
        'moth_48_price',
        'moth_24_price',
        'moth_12_price',
        'moth_6_price',
        'moth_3_price',
        'moth_1_price',
        'name',
        'ram',
        'ftp',
        'email',
        'database_domain',
        'sub_domain',
        'status',
        'mbs_network',
    ];
}
