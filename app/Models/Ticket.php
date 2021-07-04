<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SuatChieu;

class Ticket extends Model
{
    //

    public function suatChieu() {
        return $this->belongsTo(SuatChieu::class, 'suatchieu_id', 'id');
    }

    
}