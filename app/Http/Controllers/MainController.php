<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{
    public function home() {

        $santi = Saint::all();

        $data = [
            'santi' => $santi
        ];

        return view('pages.home', $data);
    }
}
