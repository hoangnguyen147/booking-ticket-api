<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuatChieu;
use App\Models\Ticket;
use App\Http\Resources\SuatChieu as SuatChieuResource;
use App\Http\Resources\SuatChieuCollection;

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
    public function store(Request $request)
    {

        
        return SuatChieu::create($request->all());
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

        for($i=0; $i<10; $i++) {
            for($j=0; $j<10; $j++) {

            }
        }

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
        //
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
