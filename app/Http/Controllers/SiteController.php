<?php
namespace App\Http\Controllers;
use App\Models\{Dish, Outlet};
class SiteController extends Controller
{
    public function home() { return view('pages.home', ['signature' => Dish::where('is_signature', true)->take(3)->get(), 'outlets' => Outlet::count()]); }
    public function about() { return view('pages.about'); }
    public function menu() { return view('pages.menu', ['dishes' => Dish::orderBy('category')->orderBy('name')->get(), 'categories' => Dish::select('category')->distinct()->pluck('category')]); }
    public function contact() { return view('pages.contact', ['outlets' => Outlet::orderBy('city')->get()]); }
}
