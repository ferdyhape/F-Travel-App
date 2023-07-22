<?php

namespace App\Http\Controllers;

use App\Models\TravelTrip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TravelTripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyId = auth()->user()->travelCompany->id;
        $trip = TravelTrip::where('travel_company_id', $companyId)->get();
        return view('dashboard_company.trip.index', [
            'trips' => $trip,
        ]);
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
        $validateTrip = $request->validate([
            'departure_time' => 'required|time_format|after:now|before:arrival_time',
            'arrival_time' => 'required|time_format|after:departure_time',
            'departure_city' => 'required|max:50|min:3|different:destination_city',
            'destination_city' => 'required|max:50|min:3|different:departure_city',
            'departure_date' => 'required|date|after:now|date_format:Y-m-d',
            'price' => 'required|numeric|min:10000',
            'seat' => 'required|numeric|min:1',
            'image_trip' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image_trip')) {
            $validateTrip['image_trip'] = $request->file('image_trip')->store('trip', 'public');
        }

        $validateTrip['travel_company_id'] = auth()->user()->travelCompany->id;

        $createdNewTrip = TravelTrip::create($validateTrip);

        return redirect('/my-company/trip')->with('success', 'Berhasil menambahkan trip baru');
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
        // dd(request()->all());
        $findTrip = TravelTrip::findOrFail($id);
        $validateTrip = $request->validate([
            'departure_time' => 'required|before:arrival_time',
            'arrival_time' => 'required|after:departure_time',
            'departure_city' => 'required|max:50|min:3|different:destination_city',
            'destination_city' => 'required|max:50|min:3|different:departure_city',
            'departure_date' => 'required|date|after:now|date_format:Y-m-d',
            'price' => 'required|numeric|min:10000',
            'seat' => 'required|numeric|min:1',
            'image_trip' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image_trip')) {
            File::delete('storage/' . $findTrip->image_trip);
            $validateTrip['image_trip'] = $request->file('image_trip')->store('trip', 'public');
        }
        // dd($validateTrip);

        $findTrip->update($validateTrip);
        $findTrip->save();

        return redirect('/my-company/trip')->with('success', 'Berhasil mengedit trip');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findTrip = TravelTrip::findOrFail($id);
        if ($findTrip->image_trip != 'trip/default.png') {
            File::delete('storage/' . $findTrip->image_trip);
        }
        $findTrip->delete();

        return redirect('/my-company/trip')->with('success', 'Berhasil menghapus trip');
    }
}
