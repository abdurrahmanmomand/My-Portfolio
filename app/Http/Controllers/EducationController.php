<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::all();
        return view("components.showeducation", compact("educations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("components.addeducation");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Education::create($request->all());
        return "Everything is ok";
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

        $educations = Education::find($id);

        return view("components.editeducation", compact("educations"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       Education::find($id)->update($request->all());
       return redirect()->route("education.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Education::findOrFail($id)->delete();
        return back();
    }
}
