<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rap;

class HeThongRap extends Model
{
    //
    protected $table = 'hethongrap';

    public function rap() {
        return $this->hasMany(Rap::class);
    }
}
