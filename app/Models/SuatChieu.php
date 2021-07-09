<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use App\Models\Film;
use App\Models\Rap;

class SuatChieu extends Model
{
    protected $table = 'suatchieu';

    protected $fillable = [
        'thoigian', 'film_id', 'rap_id'
    ];

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }

    public function film() {
        return $this->hasOne(Film::class);
    }

    public function rap() {
        return $this->hasOne(Rap::class);
    }
}