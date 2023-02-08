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

    //CREATE
    public function personCreate() {

        return view('pages.personCreate');
    }

    public function personStore(Request $request) {

        $data = $request -> validate([
            'first_name' => 'required|string|max:32',
            'last_name' => 'required|string|max:32',
            'date_of_birth' => 'required|date',
            'height' => 'nullable|integer|min:40|max:300',
        ]);
    
        $person = new Person();
    
        $person -> first_name = $data['first_name'];
        $person -> last_name = $data['last_name'];
        $person -> height = $data['height'];
        $person -> date_of_birth = $data['date_of_birth'];
        
        $person -> save();
    
        return redirect() -> route('home');
    }
    
}



