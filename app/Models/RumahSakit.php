<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    protected $fillable = ['nama', 'alamat', 'telpon', 'tipe', 'latitude', 'longitude'];
}
