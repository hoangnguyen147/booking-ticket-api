<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use App\Models\SuatChieu;

class Film extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $appends = [
        'poster',
    ];

    protected $fillable = [
        'name', 'bidanh', 'trailer', 'ngaykhoichieu', 'danhgia',
    ];

    public function suatChieu() {
        return hasMany(SuatChieu::class);
    }

    public function getPosterAttribute() {
        return $this->getFirstMediaUrl('posters');
    }
}
