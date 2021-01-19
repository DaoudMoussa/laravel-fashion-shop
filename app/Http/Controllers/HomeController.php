<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index() {
        $dressesArray = Dress::all();

        $data = [
            'dresses' => $dressesArray
        ];

        return view('home', $data);
    }

    public function contact() {
        return view('contact');
    }
}
