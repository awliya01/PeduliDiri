<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    protected $table = 'perjalanans';
    protected $fillable = [
        'tanggal',
        'jam',
        'lokasi',
        'suhu_tubuh',
        'id_user'
    ];

    protected $primaryKey = 'id_perjalanan';
}
