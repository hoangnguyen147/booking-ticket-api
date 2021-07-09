<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\HeThongRap;
use App\Models\SuatChieu;

class Rap extends Model
{
    //
    protected $table = 'rap';

    public function heThongRap() {
        return $this->belongsTo(HeThongRap::class, 'hethongrap_id', 'id');
    }

    public function suatChieu() {
        return $this->hasMany(SuatChieu::class);
    }
}
