<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('components.showsection', compact('sections'));
    }

    public function create()
    {
        return view('components.addsection');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'about' => 'nullable|string',
            's_name' => 'required|string|max:255',
        ]);

        Section::create([
            'title' => $request->title,
            'about' => $request->about,
            'user_id' => Auth::id(), // Get current authenticated user's ID
            's_name' => $request->s_name,
        ]);

        return redirect()->route('section.index')->with('success', 'Section added successfully.');
    }

    public function edit($id)
    {
        $section = Section::findOrFail($id);
        return view('components.editsection', compact('section'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'about' => 'nullable|string',
            's_name' => 'required|string|max:255',
        ]);

        $section = Section::findOrFail($id);
        $section->update([
            'title' => $request->title,
            'about' => $request->about,
            's_name' => $request->s_name,
        ]);

        return redirect()->route('section.index')->with('success', 'Section updated successfully.');
    }

    public function destroy($id)
    {
        $section = Section::findOrFail($id);
        $section->delete();
        return redirect()->route('section.index')->with('success', 'Section deleted successfully.');
    }
}
