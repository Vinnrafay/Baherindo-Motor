<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MotorBaherindo extends Model
{
    protected $fillable = [
        "nama_motor",
        "harga_motor",
        "tahun_motor",
        "km_motor",
        "gambar_motor"
    ];
}
