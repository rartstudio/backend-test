<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $guests = Guest::all();
        return view('welcome',['guests' => $guests]);
    }
}
