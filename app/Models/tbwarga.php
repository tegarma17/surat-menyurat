<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbwarga extends Model
{

    use HasFactory;


    protected $fillable = [
        'nama',
        'email',
        'username',
        'password',
        'password',
        'tempat_lahir',
        'tgl_lahir',
        'rt',
        'rw'
    ];
}
