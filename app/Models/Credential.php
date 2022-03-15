<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Credential extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'credentials';

    protected $fillable = [
        'fio',
        'country',
        'town',
        'phone',
        'email',
    ];
}
