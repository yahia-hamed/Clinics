<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    function index(){
        $bookings=Booking::paginate(10);
        return view('Booking.index',compact('bookings'));
    }
    function destroy($id){
        $bookings=Booking::find($id);
        $bookings->delete();
        return redirect()->route('booking.index');
    }
}
