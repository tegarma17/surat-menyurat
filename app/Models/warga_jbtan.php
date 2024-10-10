<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warga_jbtan extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'id_warga',
        'jabatan',
        'rt',
        'rw'
    ];
}
