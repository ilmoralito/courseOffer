<?php

namespace App\Http\Controllers;

use App\Helper;

class TrendController extends Controller
{
    public function __construct()
    {
        $this->helper = new Helper;
    }

    public function index()
    {
        $subjects = $this->helper->subjects();

        return view('trend.index', compact('subjects'));
    }
}
