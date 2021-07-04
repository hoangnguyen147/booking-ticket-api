<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Ticket;

class SuatChieu extends Model
{
    protected $table = 'suatchieu';

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }
}