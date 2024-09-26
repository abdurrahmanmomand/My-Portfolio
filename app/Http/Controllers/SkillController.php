<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $skills=Skill::all();
         return view("components.showskills", compact("skills"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("components.skillform");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        Skill::Create([
           "title"=> $request->title,
        "parcentage"=>$request->parcentage,

        "color"=> $request->color,
        "user_id"=> Auth::user()->id,
        "section_id"=>4,
        "created_at"=>now(),
        "updated_at"=>now()


        ]);
        return redirect()->route("skills.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {

          return view("components.editskill", compact("skill"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {

        $skills=Skill::find($skill->id)->update([
            "title"=> $request->title,
            "parcentage"=>$request->parcentage,

            "color"=> $request->color,
            "user_id"=> Auth::user()->id,
            "section_id"=>4,
            "created_at"=>now(),
            "updated_at"=>now()
        ]);
        return redirect()->route("skills.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {

        $skills = Skill::destroy($skill->id);
        return back();
    }
}
