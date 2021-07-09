<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuatChieu;
use App\Models\Ticket;
use App\Http\Resources\SuatChieu as SuatChieuResource;
use App\Http\Resources\SuatChieuCollection;
use App\Http\Resources\SuatChieuWithTicket;

class SuatChieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(new SuatChieuCollection(SuatChieu::all()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function isVip($maghe) {
        if($maghe<35) return false;
        if($maghe % 16 > 2 && $maghe % 16 < 15) return true;
        else return false;
    }
    public function store(Request $request)
    {
        $suatchieu = SuatChieu::create($request->all());

        for($i=1; $i<=160; $i++) {
            $ticket = [
                'maghe' => $i,
                'vip' => $this->isVip($i),
                'suatchieu_id' => $suatchieu->id,
            ];
            Ticket::create($ticket);
        }
        
        return $suatchieu;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suatchieu = SuatChieu::findOrfail($id);

        

        return new SuatChieuResource($suatchieu);
    }


    public function showByFilmId($filmId)
    {
        $suatchieu = SuatChieu::all()->where('film_id', $filmId);
        return response()->json(new SuatChieuCollection($suatchieu));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
