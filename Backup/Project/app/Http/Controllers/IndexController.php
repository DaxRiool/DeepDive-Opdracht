<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function ShowLocations() {
        $locations = DB::table('locations')->where('user_id', '=', session('USE_ID'))->get();

        // var_dump
        return view("Locations", ["locations" => $locations]);
    }

    public function AddLocation() {
        return view("AddLocations");
    }

    public function AddLocationStore(Request $req) {
        $locations = DB::table('locations')->where('user_id', '=', session('USE_ID'))->get();

        DB::table('locations')->insert([
            "User_ID" => session("USE_ID"),
            "Naam" => $req->Naam,
            "aantal_pois" => 0
        ]);

        return redirect("Locations");
    }

    public function ShowPois($Location_id) {
        $pois = DB::table('poi_list')->where('Locatie_ID', '=', $Location_id)->get();

        return view("PoiList", ["pois" => $pois, "Location_ID" => $Location_id]);
    }

    public function AddPoi($Location_id) {

        return view("AddPoi", ["Location_id" => $Location_id]);
    }

    public function AddPoiStore(Request $req) {        
        DB::table('poi_list')->insert([
            "Naam" => $req->naam,
            "Locatie_ID" => $req->location_id,
            "Locatie_In_Gebouw" => $req->Locatie_In_Gebouw,
            "Status" => $req->status
        ]);

        $aantal_pois = DB::table('poi_list')->where("Locatie_ID", '=', $req->location_id)->get();

        $aantal_pois = count($aantal_pois);
        DB::table('locations')
              ->where('id', '=', $req->location_id)
              ->update(['aantal_pois' => $aantal_pois]);

        return redirect("Pois/$req->location_id");
    }

    // public function ShowSinglePoi($poi_list_id) {
    //     $poi_list = DB::table('poi_list')->where("id", '=', $poi_list_id)->get()->first();

    //     return view("Poi", ["poi_list" => $poi_list]);
    // }

    public function AddElement($poi_list_id) {
        return view("AddElement", ["poi_list_id" => $poi_list_id]);
    }


    public function AddElementStore(Request $req) {
        DB::table('poi')->insert([
            "poi_list_ID" => $req->poi_list_id,
            "Moeilijkheidsgraad" => $req->Moeilijkheidsgraad,
            "Naam" => $req->Naam,
        ]);

        return redirect("Poi/$req->poi_list_id");
    }

    public function ShowElements($poi_list_ID) {
        $elements = DB::table('poi')->where('poi_list_ID', '=', $poi_list_ID)->get();

        $poi_list = DB::table('poi_list')->where('id', '=', $poi_list_ID)->get()->first();

        return view("Poi", ["elements" => $elements, "poi_list" => $poi_list]);
    }
}