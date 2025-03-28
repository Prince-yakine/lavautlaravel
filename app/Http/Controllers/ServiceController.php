<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index(){


        $services = Service::all();
        return view("app.service.index", compact("services"));
    }
    public function create()
    {

        return view("app.service.create");
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_name' => 'required|string',
            'prix' => 'required|integer',
            'caracteristique_service' => 'required|string',
        ]);

        Service::create($validated);

        return to_route('service.index',)->with('success','Service creer avec succes');
    }
}
