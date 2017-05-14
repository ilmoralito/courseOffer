<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use App\Helper;

class HomeController extends Controller
{
    public function index(Helper $helper)
    {
        return view('home.index', compact('helper'));
    }
}
