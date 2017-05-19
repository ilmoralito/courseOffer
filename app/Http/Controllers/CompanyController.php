<?php

namespace App\Http\Controllers;

use App\Helper;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->helper = new Helper;
    }

    public function index()
    {
        $subjects = $this->helper->subjects();
        $companies = $this->helper->companies();

        return view('company.index', compact('subjects', 'companies'));
    }
}
