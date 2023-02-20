<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReselingServers extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'pop3',
        'users',
        'ftp',
        'domain',
        'sub_domain',
        'day_price',
        'month_price',
        'year_price',
        'memory',
        'reseling_id',
        'reseling',
        'status',
    ];

}
