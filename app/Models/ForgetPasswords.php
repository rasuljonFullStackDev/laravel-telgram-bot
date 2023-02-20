<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForgetPasswords extends Model
{
    use HasFactory;
    // $table->string('full_name');
    // $table->longText('user');
    // $table->string('email');
    // $table->string('code');
    protected $fillable = [
        'full_name',
        'user',
        'email',
        'code',
    ];
}
