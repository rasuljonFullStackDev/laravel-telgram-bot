<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vds extends Model
{
    use HasFactory;
    protected $fillable = [
        'month_price_1',
        'month_price_3',
        'month_price_6',
        'month_price_12',
        'ssd',
        'cpu',
        'name',
        'tariff',
        'ftp',
        'email',
        'domain',
        'cron',
        'mbs_network',
        'ram',
        'status'
    ];
}
