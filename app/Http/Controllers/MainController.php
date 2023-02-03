<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{
    // INDEX
    public function home() {

        $santi = Saint::all();

        $data = [
            'santi' => $santi
        ];

        return view('pages.home', $data);
    }

    // DELETE

    public function saintDestroy($id) {
       
        $saint = Saint::find($id);
        $saint->delete();

        return redirect() -> route('home');
    }
    // CREATE
    public function saintCreate(){

        return view('pages.saintCreate');
    }
    public function saintStore(Request $request) {

        $data = $request->all();

        $saint = new Saint();

        $saint -> name = $data['name'];
        $saint -> birth_place = $data['birth_place'];
        $saint -> blessing_date = $data['blessing_date'];
        $saint -> number_of_miracles = $data['number_of_miracles'];

        $saint -> save();
        return redirect() -> route('home');
    }
}
