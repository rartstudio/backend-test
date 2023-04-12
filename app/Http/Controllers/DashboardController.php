<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
        $guests = Guest::all();
        return view('dashboard',['guests' => $guests]);
    }
}
