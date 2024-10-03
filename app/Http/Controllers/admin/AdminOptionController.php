<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;

class AdminOptionController extends Controller
{
   
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            
          $options = Option::all();
          return view('admin.Option.index', compact('options'));
        }
       
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
           return view('admin.Option.create');
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
          $request->validate([
            "title" => ["required", "string" ],
        ]);

        Option::create($request->all());

        return redirect()->route('admin.dashboard.Options.index')
                         ->with('success', 'Option created successfully.');
        }
    
        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
           return view('admin.Option.edit');
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Option $option)
    {
        return view('admin.Option.edit', compact('option'));
    }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, Option $option)
        {
          $request->validate([
            "title" => ["required", "string" ],
        ]);

        $option->update($request->all());

        return redirect()->route('admin.dashboard.Options.index')
                         ->with('success', 'Option updated successfully.');
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Option $option)
        {
            $option->delete();
            return redirect()->route('admin.dashboard.Options.index');
        }
    }
    

 
