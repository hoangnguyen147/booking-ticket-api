<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SuatChieu;

class Film extends Model
{
    public function suatChieu() {
        return hasMany(SuatChieu::class);
    }
}
