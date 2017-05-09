<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class ContactController extends Controller
{
    public function index()
    {
        $staff = collect([
            [
                'name' => 'John Doe',
                'telephone' => '2311 0811',
                'email' => 'john.doe@ucc.edu.ni',
                'position' => 'Coordinador de especializacion'
            ],[
                'name' => 'Jane Doe',
                'telephone' => '2311 0811',
                'email' => 'jane.doe@ucc.edu.ni',
                'position' => 'Asistente de especializacion'
            ],[
                'name' => 'Jane Doe',
                'telephone' => '2311 0811',
                'email' => 'jane.doe@ucc.edu.ni',
                'position' => 'Asistente de especializacion'
            ]
        ]);

        $contact = collect([
            'name' => 'Universidad de Ciencias Comerciales Campus Leon',
            'address' => 'Nicaragua, Leon, frente al campus medico',
            'email' => 'info@ucc.edu.ni',
            'telephone' => '2311 0811',
            'extension' => '112'
        ]);

        return view('contact.index', compact('staff', 'contact'));
    }
}
