<?php

namespace App\Http\Controllers;
use App\Models\Information;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("components.informationform");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Information::updateOrCreate(
            ['user_id'=>Auth::user()->id],
             [
                'birthdate'=>$request->birthdate,
                'age'=>$request->age,
                'website'=>$request->website,
                'degree'=>$request->degree,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'city'=>$request->city,
                'freelance'=>$request->freelance,
                'extrainformation'=>$request->extrainformation,
                'user_id'=>Auth::user()->id
             ]
        );
           return redirect()->route('profilepage');
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
