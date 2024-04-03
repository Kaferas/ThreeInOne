<?php

namespace App\Http\Controllers;

use App\Models\AdressLocation;
use App\Http\Requests\StoreAdressLocationRequest;
use App\Http\Requests\UpdateAdressLocationRequest;

class AdressLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adresses = AdressLocation::all();
        return view("admin.adress.index", ['adresses' => $adresses, 'count' => count($adresses)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.adress.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdressLocationRequest $request)
    {
        AdressLocation::create($request->validated());
        return redirect("/adress_location")->with("success", "Adresse Cree avec Success");
    }

    /**
     * Display the specified resource.
     */
    public function show(AdressLocation $adressLocation)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdressLocation $adressLocation)
    {
        return view("admin.adress.edit", ['adresse' => $adressLocation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAdressLocationRequest $request, AdressLocation $adressLocation)
    {
        $adressLocation->update($request->validated());
        return redirect("/adress_location")->with("success", "Adresse Mise a Jour avec Success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdressLocation $adressLocation)
    {
        $adressLocation->delete();
        return redirect("/adress_location")->with("delete", "Adresse Supprime Success");
    }
}
