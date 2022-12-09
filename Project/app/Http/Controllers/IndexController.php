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

    
    public function AddElement($poi_list_id) {
        return view("AddElement", ["poi_list_id" => $poi_list_id]);
    }

    
    public function AddElementStore(Request $req) {
        DB::table('poi')->insert([
            "poi_list_ID" => $req->poi_list_id,
            "Moeilijkheidsgraad" => $req->Moeilijkheidsgraad,
            "Status" => $req->status,
            "Naam" => $req->Naam,
        ]);

        return redirect("Poi/$req->poi_list_id");
    }

    public function ShowElements($poi_list_ID) {
        
        $poi_list = DB::table('poi_list')->where('id', '=', $poi_list_ID)->get()->first();

        if ($poi_list->Status == "Working") {
            $elements = DB::table('poi')->where([
                ['poi_list_ID', '=', $poi_list_ID],
                ['Status', '=', "Maintenance"]]
                )->get();
        } else {
            $elements = DB::table('poi')->where([
                ['poi_list_ID', '=', $poi_list_ID],
                ['Status', '=', "Broken"]]
                )->get();
        }
        
        return view("Poi", ["elements" => $elements, "poi_list" => $poi_list]);
    }
    
    public function UpdatePoi(Request $req) {
        DB::table('poi_list')-> update([
            "Naam" => $req->Naam,
            "Status" => $req->Status,
            "Locatie_in_Gebouw" => $req->Locatie_In_Gebouw
        ]);

        return redirect("Poi/$req->poi_list_id");
    }

    public function ShowInstruction($poi_id) {
        $instruction = DB::table('instructions')->where("poi_id", '=', $poi_id)->orderBy('stap', 'asc')->get();
    
        return view("Instruction", ["instructions" => $instruction, "poi_id" => $poi_id]);
    }

    public function AddStap($poi_id) {    
        return view("AddStap", ["poi_id" => $poi_id]);
    }

    public function AddStapStore(Request $req) {
        $instruction = DB::table('instructions')->where([
            ["poi_id", '=', $req->poi_id],
            ["stap", '=', $req->stap]
            ])->get()->first();

            var_dump($instruction);

        if (isset($instruction)){
            echo "step number already exists";
        } else {
            DB::table('instructions')->insert([
                "poi_id" => $req->poi_id,
                "stap" => $req->stap,
                "instructie" => $req->instructie
            ]);
    
            return redirect("Instruction/$req->poi_id");
        }
    }
    public function ShowTest($poi_list_id) {
        return view("Test");
    }

    public function MakeTest($poi_list_id) {
        return view("MakeTest", ["poi_list_id" => $poi_list_id]);
    }

    // public function MakeTestStore(Request $req) {
    //     unset($_POST["_token"]);
    //     unset($_POST["poi_list_id"]);

    //     foreach($_POST as $key => $value) {

    //         if(strpos($value, "Vraag")) {
    //             $vraag_id = DB::table('questions')->insertGetId([
    //                 "Vraag" => $value,
    //             ]);
    //         }

    //         foreach($_POST as $key => $value) {
            
    //             if(strpos($value, "Antwoord")) {
    //                 if(strpos($value, "r")) {
    //                     $antwoord_id = DB::table('answers')->insertGetId([
    //                         "answer" => $value,
    //                         "goed_of_fout" => 1
    //                     ]);
    //                 } else {
    //                     $antwoord_id = DB::table('answers')->insertGetId([
    //                         "answer" => $value,
    //                         "goed_of_fout" => 0
    //                     ]);
    //                 }
    //             }

    //             DB::table('tests')->insert([
    //                 "poi_list_id" => $req->poi_id,
    //                 "vraag_id" => $vraag_id,
    //                 "antwoorden_id" => $antwoord_id
    //             ]);
    //         }
    //     }

        
    // }
}