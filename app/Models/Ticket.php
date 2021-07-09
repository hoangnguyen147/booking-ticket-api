<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SuatChieu;

class Ticket extends Model
{
    protected $fillable = [
        'maghe', 'dadat', 'vip', 'suatchieu_id'
    ];


    public function suatChieu() {
        return $this->belongsTo(SuatChieu::class, 'suatchieu_id', 'id');
    }

    
}