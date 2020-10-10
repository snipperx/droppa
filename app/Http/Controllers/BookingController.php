<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\booking;
use App\vehicle;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         *load vehicles with bookings using the bookingVehicle relationship
         */
        
        $booking = booking::select('bookings.*','vehicles.name as vehicle_name')
        ->join('vehicles', 'vehicles.id', '=', 'bookings.vehicle_id')
        ->get();

       // return $booking;

        $data['booking'] = $booking;
        return view('booking.book')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
       
        $Data = $request->all();
        unset($Data['_token']);

   
        $booking =  new booking();
        $booking->pick_up_address = $Data['pick_up_address'];
        $booking->name = $Data['name'];
        $booking->phone = $Data['phone'];
        $booking->date = strtotime($Data['date']);
        $booking->time = strtotime($Data['time']);
        $booking->drop_of_address = $Data['drop_of_address'];
        $booking->drop_of_name = $Data['drop_of_name'];
        $booking->drop_of_phone = $Data['drop_of_phone'];
        $booking->vehicle_id = 2;
        $booking->comment = $Data['comment'];
        $booking->save();

            return back();
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
