<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ShowLocations($user_id) {
        $locations = DB::table('locations')->where('user_id', '=', $user_id);

        return view("Locations", ["locations" => $locations]);
    }

    public function AddLocation() {
        return view("AddLocations");
    }

    public function AddLocationStore(Request $req) {
        $locations = DB::table('locations')->where('user_id', '=', $user_id);
        
        DB::insertGetid([
            "Naam" => $req->Naam,
            "Aantal_POI's" => 0
        ]);
    }
}
