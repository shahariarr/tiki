<?php

namespace App\Http\Controllers;

use App\Models\SeatAllocation;
use Carbon\Carbon;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('component.createdTrip ');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Trip::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search_trip()
    {
        return view('component.searchTrip');
    }

    public function get_trip(Request $request)
    {

         $data = Trip::where('from','like','%'.$request->from.'%')->where('to', 'like','%'. $request->to .'%')->whereDate('date',$request->date)->get();
        if($data->isEmpty())
        {
            return redirect()->back()->with('error','No Trip Found');

        }
        else
        {
            return view('component.showtrip', compact('data'));
        }




    }

    public function book_trip($id)
    {
        $data = Trip::find($id);
        return view('component.bookingSeat', compact('data'));
    }

    public function book_trip_store(Request $request)
    {
        // $request->validate([
        //     'seat' => 'required',
        //     'seat_number' => 'required',
        //     'name' => 'required',
        //     'mobile_number' => 'required',
        // ]);
        //dd(count($request->seats));
        $user =User::create([
            'name' => $request->name,
            'mobile_number' => $request->mobile_number,
        ]);

        $trip = Trip::find($request->id);

        $seat=SeatAllocation::create([
            'user_id' => $user->id,
            'trip_id' => $trip->id,
            'seat' =>count($request->seats),
            'seat_number' =>json_encode($request->seat_number),

        ]);

        $seat->seat_number = json_encode($seat->seat_number);
        $seat->save();



        return redirect()->back()->with('success','Trip Booked Successfully');
    }

   

}
