<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\HeThongRap;

class Rap extends Model
{
    //
    protected $table = 'rap';

    public function heThongRap() {
        return $this->belongsTo(HeThongRap::class, 'hethongrap_id', 'id');
    }
}
