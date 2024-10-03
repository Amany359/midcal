<?php

namespace App\Services;

use App\Models\Category;
use App\Utils\ImageUpload;
use Yajra\DataTables\Facades\DataTables;

class CategoryService
{


    public function getMainCategories()
    {
        return Category::where('parent_id', 0)->orWhere('parent_id', null)->get();
    }


    public function store($request, $params)
    {
        $params['parent_id'] = $params['parent_id'] ?? 0;
    
        // Handle the image upload
        if ($request->has('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $firstFiveCharacters = substr($imageName, 0, 5);
            $name = 'img_1716557304_' . $firstFiveCharacters;
            $params['image'] = $name . '.' . $image->extension();
            $image->move(public_path('topicImages'), $params['image']);
        }
    
        // Create the category with the params
        return Category::create($params);
   
    }


    public function getById($id, $childrenCount = false)
    {
        $query =  Category::where('id', $id);
        if($childrenCount){
            $query->withCount('child');
        }
        return $query->firstOrFail();
    }

    public function update($request,$params)
    {
        $params['parent_id'] = $params['parent_id'] ?? 0;
    
        // Handle the image upload
        if ($request->has('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $firstFiveCharacters = substr($imageName, 0, 5);
            $name = 'img_1716557304_' . $firstFiveCharacters;
            $params['image'] = $name . '.' . $image->extension();
            $image->move(public_path('topicImages'), $params['image']);
        }
    
        // Create the category with the params
        return Category::create($params);
    }




    public function datatable()
    {
        $query = Category::select('*')->with('parent');
        return Datatables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '
                    <a href="' . route('admin.dashboard.categories.edit', $row->id) . '" class="edit btn btn-success btn-sm">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a id="deleteBtn" data-id="' . $row->id . '" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#deletemodal">
                        <i class="fa fa-trash"></i>
                    </a>';
            })
            ->addColumn('parent', function ($row) {
                
                return ($row->parent_id == 0 || $row->parent_id === null) ? 'قسم رئيسي' : $row->parent->name ?? 'قسم فرعي';
            })
            ->addColumn('image', function ($row) {
                return '<img src="' . asset('topicImages/' . $row->image) . '" width="90" height="90" />';

            })
            ->rawColumns(['parent', 'action', 'image'])
            ->make(true);
    }
}