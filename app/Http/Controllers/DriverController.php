<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\DB;
use App\Auto;
use App\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($korisnikID)
    {
        $drivers = Driver::where('korisnikID', $korisnikID)->get();

        $new_drivers = [];
        $drivers_array = [];

        foreach($drivers as $driver){
            $car = Auto::where('id', $driver->autoID)->get()->first();
            $driver["car"] = $car;
            $new_drivers["driver"] = $driver;

            $drivers_array[] = $driver;
        }

        return response()->json($drivers_array, 200);
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
        $vehicle_controller = new VehicleController;
        $vehicle = $vehicle_controller->store($request);


        $driver = Driver::create([
            "korisnikID" => $request["korisnikID"],
            "autoID" => $vehicle->original->id
        ]);

        return response()->json($driver, 201);

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
