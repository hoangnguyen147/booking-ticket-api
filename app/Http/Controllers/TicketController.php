<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\SuatChieu;
use App\Http\Resources\TicketCollection;



class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function showBySuatChieuId($suatchieu_id)
    {
        $tickets = Ticket::all()->where('suatchieu_id', $suatchieu_id);
        $data = new TicketCollection($tickets);
        return response()->json(compact( 'suatchieu_id', 'data'));
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

    public function booking(Request $request, $suatchieu_id)
    {
        $soldTicket = Ticket::where([['suatchieu_id', '=', $suatchieu_id], ["maghe", "=", $request->maghe]]);
        $soldTicket->update(['dadat' => "1"]);
        return response()->json(['message' => 'booking success']);
        
        /* foreach((array)$request as $key => $id) {
            $ticket = $list->where('id', $id);
            $ticket->dadat = true;
            $ticket->save();
        }
        return response()->json(['message' => 'booking success']); */
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
