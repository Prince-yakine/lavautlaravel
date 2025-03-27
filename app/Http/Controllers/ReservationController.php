<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function index(){
        $reservations = Reservation::with('service')->get();
        return view("app.reservation.index", compact("reservations"));
    }

     public function store(Request $request)
     {
         $validated = $request->validate([
             'service_id' => 'required|exists:services,id',
             'name' => 'required|string',
             'phone' => 'required|string',
             'reservation_date' => 'required|date',
         ]);


         Reservation::create($validated);

        return to_route('message');
 
     }
 }

