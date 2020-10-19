<?php

namespace App\Http\Controllers;

use App\Rezervacija;
use App\Driver;
use App\Auto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RezervacijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($korisnikID)
    {
        //mislim da je ovo dobro, ali pogledat jos sa stankom :P
        $drivers = Driver::where('korisnikID', $korisnikID)->get();

        $rezervacija_array = [];

        foreach($drivers as $driver){
            $rezervacija = Rezervacija::where('vozac_id', $driver->id)->get()->first();
            $driver["rezervacija"] = $rezervacija;

            $rezervacija_array[] = $driver;
        }

        return response()->json($rezervacija_array, 200);
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
        $parking_mjesto = $request('parking_mjesto');
        $parking_mjesto_id = DB::table('parking_mjesto')->select('id')->where('naziv', $parking_mjesto)->get()[0]->id;

        $driver_contorller = new DriverController;
        $driver = $driver_contorller->store($request);

        $rezervacija = Rezervacija::create([
            'parking_mjesto_id' => $parking_mjesto_id,
            'vozac_id' => $driver,
            'cijena' => $request('cijena'), 
            'vrijeme_rezervacije' => $request('vrijeme_rezervacije'),
        ]);
        return response()->json($rezervacija, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rezervacija  $rezervacija
     * @return \Illuminate\Http\Response
     */
    public function show(Rezervacija $rezervacija)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rezervacija  $rezervacija
     * @return \Illuminate\Http\Response
     */
    public function edit(Rezervacija $rezervacija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rezervacija  $rezervacija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rezervacija $rezervacija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rezervacija  $rezervacija
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rezervacija = Rezervacija::find($id);

        $rezervacija->delete();
        return response()->json(null, 204);
    }
}
