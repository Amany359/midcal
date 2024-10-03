<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Veiwee;
use App\Models\Option;
use App\Models\Target;
use App\Models\Category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function TeamFront()
    {
        $teams = Team::all();
        return view('website.index', compact('teams'));
    }

    public function ViewFront()
    {
        $veiwees = Veiwee::all();
        return view('website.index', compact('veiwees'));
    }
    public function OptionFront()
    {
        $options = Option::all();
        return view('website.index', compact('options'));
    }
    public function TargetFront()
    {
        $targets = target::all();
        return view('website.index', compact('targets'));
    }
    public function CategoryFront()
    {
        $mincategories = Category::where('parent_id', 0)->orWhere('parent_id', null)->get();
        
        return view('website.index', compact('mincategories', ));
    }
    
}
