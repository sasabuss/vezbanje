<?php

namespace App\Http\Controllers;

use App\Models\Ocene;
use Illuminate\Http\Request;

class OceneController extends Controller
{
    public function index()
    {
        $ocene = Ocene::all();
        return view('welcome', compact('ocene'));
    }

    public function dodajOcenu()
    {
        return view('dodaj-ocenu');
    }

    public function upisiOcenu(Request $request)
    {
        $request->validate([
            'ocena' => 'required|integer|min:1|max:5',
            'predmet' => 'required|string',
            'profesor' => 'required|string',

        ]);

        Ocene::create([
            'ocena'=> $request->get('ocena'),
            'predmet'=> $request->get('predmet'),
            'profesor'=> $request->get('profesor'),
        ]);
        return redirect('/');
    }
}
