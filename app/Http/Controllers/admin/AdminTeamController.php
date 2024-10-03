<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminTeamController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "description" => "required|string",
            "image" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->description = $request->description;

        // Handle image upload
        if ($request->has('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $firstFiveCharacters = substr($imageName, 0, 5);
            $name = 'img_1716557304_' . $firstFiveCharacters;
            $team->image = $name . '.' . $image->extension();
            $image->move(public_path('topicImages'), $team->image);
        }

        $team->save();
        

        return redirect()->route('admin.dashboard.teams.index')
                         ->with('success', 'Team created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            "name" => "required|string",
            "description" => "required|string",
            "image" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
        ]);

        $team->name = $request->name;
        $team->description = $request->description;

        if ($request->has('image')) {
            // Delete the old image if it exists
            if ($team->image && file_exists(public_path('topicImages/' . $team->image))) {
                unlink(public_path('topicImages/' . $team->image));
            }

            // Store the new image
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $firstFiveCharacters = substr($imageName, 0, 5);
            $name = 'img_1716557304_' . $firstFiveCharacters;
            $team->image = $name . '.' . $image->extension();
            $image->move(public_path('topicImages'), $team->image);
        }
        $team->save();
        return redirect()->route('admin.dashboard.teams.index')
                         ->with('success', 'Team updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        // Delete the image if it exists
        if ($team->image && file_exists(public_path('topicImages/' . $team->image))) {
            unlink(public_path('topicImages/' . $team->image));
        }

        

        $team->delete();
        return redirect()->route('admin.dashboard.teams.index')
                         ->with('success', 'Team deleted successfully.');
    }

    /**
     * Helper method to delete the image.
     */
   
    }

