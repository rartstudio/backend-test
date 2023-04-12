<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:180',
            'address' => 'required|max:180',
            'phone_number' => 'required',
            'note' => 'required',
        ]);

        Guest::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'note' => $request->note,
        ]);

        return redirect()->route('home')->with([
            'success' => 'Success saving',
        ]);
    }

    public function destroy($id) {
        $guest = Guest::find($id);
        $guest->delete();
        return redirect()->route('dashboard')->with([
            'success' => 'Success delete'
        ]);
    }
}
