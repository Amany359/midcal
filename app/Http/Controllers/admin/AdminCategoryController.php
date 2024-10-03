<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\admin\Categories\CategoryDeleteRequest;
use App\Http\Requests\admin\Categories\CategoryStoreRequest;
use App\Http\Requests\admin\Categories\CategoryUpdateRequest;
use App\Services\CategoryService;
use DataTables;

class AdminCategoryController extends Controller
{
    
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    

    public function index()
    {
        $mincategories = $this->categoryService->getMainCategories();
        return view('admin.category.index' , compact('mincategories'));
    }

    public function getall()
    {
        return $this->categoryService->datatable();
    }

    public function create()
    {
       
    }

    public function store(CategoryStoreRequest $request)
    {
        // Pass both $request and the validated data
        $this->categoryService->store($request, $request->validated());
        
        return redirect()->route('admin.dashboard.categories.index')->with('success', 'تمت الاضافة بنجاح');
    }
   

    public function edit($id)
{
    $category = $this->categoryService->getById($id,true);
    $mincategories = $this->categoryService->getMainCategories();
    return view('admin.category.edit' , compact('category','mincategories'));
}

    public function update(CategoryUpdateRequest $request)
    {
        $this->categoryService->update($request, $request->validated());
        
        return redirect()->route('admin.dashboard.categories.index')->with('success', 'تمت الاضافة بنجاح');
    }


        
    public function destroy()
{

}
    public function delete(CategoryDeleteRequest $request, Category $category)
{
   

    // Redirect back with success message
    Category::whereId($request->id)->delete();
    return redirect()->route('admin.dashboard.categories.index');}
}
