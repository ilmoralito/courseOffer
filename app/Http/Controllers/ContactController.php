<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class ContactController extends Controller
{
    public function index()
    {
        $headquarters = collect([
            [
                'headquarter' => 'Leon',
                'address' => 'Nicaragua, Leon. Costa Este del campus medico',
                'telephones' => [
                    [
                        'provider' => 'convencional',
                        'number' => '2311 0812',
                        'extension' => '125'
                    ],[
                        'provider' => 'Movistar',
                        'number' => '8888 5848'
                    ], [
                        'provider' => 'Claro',
                        'number' => '8785 2815'
                    ]
                ],
                'staff' => [
                    [
                        'name' => 'John Doe',
                        'email' => 'john.doe@ucc.edu.ni',
                        'position' => 'Coordinador de especializacion'
                    ],[
                        'name' => 'Jane Doe',
                        'email' => 'jane.doe@ucc.edu.ni',
                        'position' => 'Asistente de especializacion'
                    ],[
                        'name' => 'Dean Doe',
                        'email' => 'dean.doe@ucc.edu.ni',
                        'position' => 'Asistente de especializacion'
                    ]
                ]
            ],[
                'headquarter' => 'Managua',
                'address' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                'telephones' => [
                    [
                        'provider' => 'conventional',
                        'number' => '2223 0815',
                        'extension' => '100'
                    ],[
                        'provider' => 'Movistar',
                        'number' => '8845 5848'
                    ]
                ],
                'staff' => [
                    [
                        'name' => 'Juan Perez',
                        'email' => 'juan.perez@ucc.edu.ni',
                        'position' => 'Coordinador de especializacion'
                    ],[
                        'name' => 'Ken Master',
                        'email' => 'ken.Master@ucc.edu.ni',
                        'position' => 'Asistente de especializacion'
                    ]
                ]
            ],[
                'headquarter' => 'Matagapla',
                'address' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla veniam sapiente laudantium tempore sed.',
                'telephones' => [
                    [
                        'provider' => 'conventional',
                        'number' => '2223 0815'
                    ]
                ],
                'staff' => [
                    [
                        'name' => 'Juan Perez',
                        'email' => 'juan.perez@ucc.edu.ni',
                        'position' => 'Coordinador de especializacion'
                    ],[
                        'name' => 'Ken Master',
                        'email' => 'ken.master@ucc.edu.ni',
                        'position' => 'Asistente de especializacion'
                    ],[
                        'name' => 'Ben Master',
                        'email' => 'ben.master@ucc.edu.ni',
                        'position' => 'Asistente de especializacion'
                    ]
                ]
            ]
        ]);

        return view('contact.index', compact('headquarters'));
    }
}
