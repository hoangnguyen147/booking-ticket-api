<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\SuatChieu as SuatChieuResource;


class Film extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'bidanh' => $this->bidanh,
            'trailer' => $this->trailer,
            'ngaykhoichieu' => $this->ngaykhoichieu,
            'mota' => $this->mota,
            'danhgia' => $this->danhgia,
            'poster' =>$this->poster,
            'suatchieu' => SuatChieuResource::collection($this->suatChieu),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
