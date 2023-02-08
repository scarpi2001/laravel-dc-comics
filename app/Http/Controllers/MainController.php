<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;

class MainController extends Controller
{   
    //HOME
    public function home() {

        $people = Person :: all();

        // $data = [
        //     'people' => $person
        // ];

        return view('pages.home', compact('people'));
    }

    //SHOW 
    public function personShow(Person $person) {

        return view('pages.personShow', compact('person'));
    }

    //DELETE
    public function personDelete(Person $person) {

        $person -> delete();
    
        return redirect() -> route('home');
    }
    
}
