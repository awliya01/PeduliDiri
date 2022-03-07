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
        'suhu_tubuh'
    ];

    protected $primaryKey = 'id_perjalanan';
}
