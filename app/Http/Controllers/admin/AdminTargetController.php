<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Target;
use Illuminate\Http\Request;

class AdminTargetController extends Controller
{
  
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            
          $targets = target::all();
          return view('admin.target.index', compact('targets'));
        }
       
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
           return view('admin.target.create');
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
          $request->validate([
            "name" => ["required", "string" ],
            "description" => ["required", "string" ],
        ]);

        target::create($request->all());

        return redirect()->route('admin.dashboard.targets.index')
                         ->with('success', ' created successfully.');
        }
    
        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
           return view('admin.target.edit');
        }
    
        /**target
         * Show the form for editing the specified resource.
         */
        public function edit(target $target)
    {
        return view('admin.target.edit', compact('target'));
    }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, target $target)
        {
          $request->validate([
            "name" => ["required", "string" ],
            "description" => ["required", "string" ],
        ]);

        $target->update($request->all());

        return redirect()->route('admin.dashboard.targets.index')
                         ->with('success', 'target updated successfully.');
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(target $target)
        {
            $target->delete();
            return redirect()->route('admin.dashboard.targets.index');
        }
    }
    

 


