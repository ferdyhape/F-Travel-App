<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Passenger;
use App\Models\TravelTrip;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = auth()->user()->booking;
        if ($booking->isEmpty()) {
            return redirect('/trip')->with('toast_error', 'Anda belum memiliki riwayat booking');
        }
        return view('landing_page.booking.index', [
            'bookings' => $booking,
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
        $validatedData = $request->validate([
            'travel_trip_id' => 'required|exists:travel_trips,id',
            'passengers' => 'required|array',
            'passengers.name.*' => 'required|string',
            'passengers.phone_number.*' => 'required|string|max:13',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['travel_company_id'] = TravelTrip::findOrFail($validatedData['travel_trip_id'])->travel_company_id;

        $totalPassengers = count($validatedData['passengers']['name']);
        $totalPrice = TravelTrip::findOrFail($validatedData['travel_trip_id'])->price * $totalPassengers;

        $createdBooking = Booking::create([
            'travel_trip_id' => $validatedData['travel_trip_id'],
            'user_id' => $validatedData['user_id'],
            'total_passenger' => $totalPassengers,
            'total_price' => $totalPrice,
            'status' => 'Pending',
        ]);

        for ($i = 0; $i < $totalPassengers; $i++) {
            Passenger::create([
                'booking_id' => $createdBooking->id,
                'name' => $request->passengers['name'][$i],
                'phone_number' => $request->passengers['phone_number'][$i],
            ]);
        }

        return redirect("/booking/$createdBooking->id")->with('success', 'Berhasil melakukan booking, lanjutkan pembayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd("show");
        $booking = Booking::findOrFail($id);
        return view('landing_page.booking.show', [
            'booking' => $booking,
        ]);
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

    public function preBooking($id)
    {
        $travelTrip = TravelTrip::findOrFail($id);
        return view('landing_page.booking.pre-book', [
            'trip' => $travelTrip,
        ]);
    }

    public function storePayment(Request $request, $id)
    {
        $validatedData = $request->validate([
            'payment_proof' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $booking = Booking::findOrFail($id);
        $validatedData['payment_proof'] = $request->file('payment_proof')->store('payment_proof', 'public');

        $booking->update([
            'payment_proof' => $validatedData['payment_proof'],
        ]);
        $booking->save();

        return redirect("/booking/$booking->id")->with('success', 'Berhasil melakukan pembayaran, silahkan tunggu konfirmasi dari admin');
    }
}
