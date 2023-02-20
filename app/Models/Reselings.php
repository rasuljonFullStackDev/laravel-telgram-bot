<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reselings extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'address_id',
        'mbs_network',
        'protsessor',
        'panel',
        'ip',
        'ns1',
        'ns2',
        'status',
    ];
}
