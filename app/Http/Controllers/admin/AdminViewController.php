<?php

namespace App\Http\Controllers\admin;
use App\Models\Veiwee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminViewController extends Controller
{
 
  
  
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            
            $veiwee = Veiwee::all();
          return view('admin.view.index', compact('veiwee'));
        }
       
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
           return view('admin.view.create');
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
          $request->validate([
            "name" => ["required", "string" ],
            "language" => ["required", "string" ],
            "image" => ["nullable", "image", "mimes:jpeg,png,jpg,gif", "max:2048"],
            "create_date" => ["required", "string" ],

        ]);
        $veiwee = new Veiwee();
        $veiwee->name = $request->name;
        $veiwee->language = $request->language;
        $veiwee->create_date = $request->create_date;

        // Handle image upload
        if ($request->has('image')) {
            $veiwee->image = $this->handleImageUpload($request->file('image'));
        }

        $veiwee->save();
        

        return redirect()->route('admin.dashboard.views.index')
                         ->with('success', ' created successfully.');
        }
    
        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
           return view('admin.view.edit');
        }
    
        /**target
         * Show the form for editing the specified resource.
         */
        public function edit(Veiwee $veiwee)
    {
        return view('admin.view.edit', compact('veiwee'));
    }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, Veiwee $veiwee)
        {
          $request->validate([
            "name" => ["required", "string" ],
            "language" => ["required", "string" ],
            "image" => ["nullable", "image", "mimes:jpeg,png,jpg,gif", "max:2048"],
             "create_date" => ["required", "string" ],
        ]);

        $veiwee->name = $request->name;
        $veiwee->language = $request->language;
        $veiwee->create_date = $request->create_date;

        if ($request->has('image')) {
            if ($veiwee->image && file_exists(public_path('topicImages/' . $veiwee->image))) {
                unlink(public_path('topicImages/' . $veiwee->image));
            }
            $veiwee->image = $this->handleImageUpload($request->file('image'));
        }

        $veiwee->save();
        return redirect()->route('admin.dashboard.views.index')
                         ->with('success', 'view updated successfully.');
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Veiwee $veiwee)
    {
        if ($veiwee->image && file_exists(public_path('topicImages/' . $veiwee->image))) {
            unlink(public_path('topicImages/' . $veiwee->image));
        }

        $veiwee->delete();

        return redirect()->route('admin.dashboard.views.index')
                         ->with('success', 'View deleted successfully.');
    }

    protected function handleImageUpload($image)
    {
        $imageName = $image->getClientOriginalName();
        $firstFiveCharacters = substr($imageName, 0, 5);
        $name = 'img_1716557304_' . $firstFiveCharacters;
        $imagePath = $name . '.' . $image->extension();
        $image->move(public_path('topicImages'), $imagePath);
        return $imagePath;
    }


    }
    

 






