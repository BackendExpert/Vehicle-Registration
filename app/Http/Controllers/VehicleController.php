<?php

namespace App\Http\Controllers;

use App\Models\VehiclesM;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicle = VehiclesM::all();
        return view('vehicles.index')->with('vehicle', $vehicle);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'owner' => ['required'],
            'vehicle_plate_no' => ['required', 'min:10', 'max:11', 'unique:vehicles'],
            'vehicle_chassis_no' => ['required', 'min:12', 'max:15', 'unique:vehicles'],
            'vehicle_registed_no' => ['required', 'min:12', 'max:15', 'unique:vehicles'],
            'vehicle_type' => ['required', 'min:2', 'max:10'],
            'vehicle_model' => ['required', 'min:1', 'max:10'],
            'vehicle_color' => ['required', 'min:2', 'max:10'],
            'seats' => ['required'],
        ]);

        $new_vechicle = new VehiclesM();
        $new_vechicle->vehicle_plate_no = $request->vehicle_plate_no;
        $new_vechicle->vehicle_chassis_no = $request->vehicle_chassis_no;
        $new_vechicle->vehicle_registed_no = $request->vehicle_registed_no;
        $new_vechicle->vehicle_type = $request->vehicle_type;
        $new_vechicle->vehicle_model = $request->vehicle_model;
        $new_vechicle->vehicle_color = $request->vehicle_color;
        $new_vechicle->seats = $request->seats;

        dd($new_vechicle);
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
}
