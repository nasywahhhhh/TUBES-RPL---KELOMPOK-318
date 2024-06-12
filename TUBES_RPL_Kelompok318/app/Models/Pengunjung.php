<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;

    protected $table = "pengunjung";

    protected $fillable = [
        'jumlah_pengunjung',
        'jumlah_konsultasi',
        'jumlah_order'
    ];
}
