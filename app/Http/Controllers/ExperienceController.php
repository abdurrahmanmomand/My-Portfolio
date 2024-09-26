<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experience = Experience::all();
        return view("components.showexperience",compact("experience"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("components.addexperience");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $education = Experience::create([
            'specialist'=>$request->specialist,
            'start_date'=>$request->start_date,
            'end_date'=>$request->start_date,
            'place_of_experiance'=>$request->place_of_experiance,
            'tasks'=>$request->tasks,
            'about_experience'=>$request->about_experience,
            'user_id'=>Auth::user()->id,
        ]);
        return redirect()->route('experience.create')->with('success','');
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
        $experience = Experience::find($id);
        return view('components.editexperience',compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $experience = Experience::find($id)->update([
            'specialist'=>$request->specialist,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
             'place_of_experiance'=>$request->place_of_experiance,
             'tasks'=>$request->tasks,
             'about_experience'=>$request->about_experience,
             'user_id'=>Auth::user()->id
         ]);
         return redirect()->route('experience.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $experience = Experience::find($id)->delete();
        return redirect()->route('experience.index');
    }
}
