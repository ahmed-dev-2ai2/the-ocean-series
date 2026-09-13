<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AhmedPortfolioController extends Controller
{
    public function home()    { return view('ahmed.home'); }
    public function about()   { return view('ahmed.about'); }
    public function projects(){ return view('ahmed.projects'); }
    public function contact() { return view('ahmed.contact'); }
}