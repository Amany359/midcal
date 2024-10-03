<?php


use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\auth\AdminLoginController;
use App\Http\Controllers\admin\auth\AdminRegisterController;
use App\Http\Controllers\admin\AdminOptionController;
use App\Http\Controllers\admin\AdminTargetController;
use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminTeamController;
use App\Http\Controllers\admin\AdminViewController;


/*
|--------------------------------------------------------------------------
| Admih Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


    Route::get('admin/dashboard/home',[AdminHomeController::class,'index'])->name('admin.dashboard.home');
     //   ->middleware('auth:admin')
    

    
   //ROUTE OPTIONS


   Route::get('admin/dashboard/Options/index',[AdminOptionController::class,'index'])->name('admin.dashboard.Options.index');

Route::get('admin/dashboard/Options/create/',[AdminOptionController::class,'create'])->name('admin.dashboard.Options.create');
Route::post('admin/dashboard/Options/store',[AdminOptionController::class,'store'])->name('admin.dashboard.Options.store');
Route::get('admin/dashboard/Options/{option}/edit',[AdminOptionController::class,'edit'])->name('admin.dashboard.Options.edit');
Route::put('admin/dashboard/Options/{option}/edit',[AdminOptionController::class,'update'])->name('admin.dashboard.Options.update');
Route::delete('admin/dashboard/Options/{option}/destroy',[AdminOptionController::class,'destroy'])->name('admin.dashboard.Options.destroy');


//ROUTE Targets
Route::get('admin/dashboard/targets/index',[AdminTargetController::class,'index'])->name('admin.dashboard.targets.index');
Route::get('admin/dashboard/targets/create/',[AdminTargetController::class,'create'])->name('admin.dashboard.targets.create');
Route::post('admin/dashboard/targets/store',[AdminTargetController::class,'store'])->name('admin.dashboard.targets.store');
Route::get('admin/dashboard/targets/{target}/edit',[AdminTargetController::class,'edit'])->name('admin.dashboard.targets.edit');
Route::put('admin/dashboard/targets/{target}/edit',[AdminTargetController::class,'update'])->name('admin.dashboard.targets.update');
Route::delete('admin/dashboard/targets/{target}/destroy',[AdminTargetController::class,'destroy'])->name('admin.dashboard.targets.destroy');



//ROUTE Categories
Route::get('admin/dashboard/categories/index',[AdminCategoryController::class,'index'])->name('admin.dashboard.categories.index');
Route::get('admin/dashboard/categories/ajax',[AdminCategoryController::class,'getall'])->name('admin.dashboard.categories.getall');

Route::get('admin/dashboard/categories/create/',[AdminCategoryController::class,'create'])->name('admin.dashboard.categories.create');
Route::post('admin/dashboard/categories/store',[AdminCategoryController::class,'store'])->name('admin.dashboard.categories.store');
Route::get('admin/dashboard/categories/{category}/edit',[AdminCategoryController::class,'edit'])->name('admin.dashboard.categories.edit');
Route::put('admin/dashboard/categories/{category}/edit',[AdminCategoryController::class,'update'])->name('admin.dashboard.categories.update');
//Route::resource('categories', AdminCategoryController::class);
Route::delete('admin/dashboard/categories/delete', [AdminCategoryController::class, 'delete'])->name('admin.dashboard.categories.delete');


//ROUTE Teams
Route::get('admin/dashboard/teams/index',[AdminTeamController::class,'index'])->name('admin.dashboard.teams.index');
Route::get('admin/dashboard/teams/create/',[AdminTeamController::class,'create'])->name('admin.dashboard.teams.create');
Route::post('admin/dashboard/teams/store',[AdminTeamController::class,'store'])->name('admin.dashboard.teams.store');
Route::get('admin/dashboard/teams/{team}/edit',[AdminTeamController::class,'edit'])->name('admin.dashboard.teams.edit');
Route::put('admin/dashboard/teams/{team}/edit',[AdminTeamController::class,'update'])->name('admin.dashboard.teams.update');
Route::delete('admin/dashboard/teams/{team}/destroy',[AdminTeamController::class,'destroy'])->name('admin.dashboard.teams.destroy');



//ROUTE Views 
Route::get('admin/dashboard/views/index',[AdminViewController::class,'index'])->name('admin.dashboard.views.index');
Route::get('admin/dashboard/views/create/',[AdminViewController::class,'create'])->name('admin.dashboard.views.create');
Route::post('admin/dashboard/views/store',[AdminViewController::class,'store'])->name('admin.dashboard.views.store');
Route::get('admin/dashboard/views/{veiwee}/edit',[AdminViewController::class,'edit'])->name('admin.dashboard.views.edit');
Route::put('admin/dashboard/views/{veiwee}/edit',[AdminViewController::class,'update'])->name('admin.dashboard.views.update');
Route::delete('admin/dashboard/views/{veiwee}/destroy',[AdminViewController::class,'destroy'])->name('admin.dashboard.views.destroy');

