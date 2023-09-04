<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function donate(): View
    {
        return view('donate');
    }
    public function resume(): View
    {
        return view('resume');
    }
    public function contact(): View
    {
        return view('contact');
    }
}