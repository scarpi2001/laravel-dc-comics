<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;

class MainController extends Controller
{
    public function home() {

        $people = Person :: all();

        // $data = [
        //     'people' => $person
        // ];

        return view('pages.home', compact('people'));
    }
    
}
