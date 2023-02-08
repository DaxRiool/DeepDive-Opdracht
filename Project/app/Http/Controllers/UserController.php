<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    // pakt de nieuwe gegevens van de user en slaat het op in de user table
    public function RegisterStore(Request $req) {
        $users = DB::table('users')->where([
            'email' => $req->email,
        ])->first();
        
        if (isset($users)) {
            echo "gebruiker bestaat al";
        } else {
            DB::table('users')->insertGetID([
                'email' => $req->email,
                'password' => $req->password
            ]);
            return redirect("Login");
        }
    }

    // checkt of de user bestaat en stuurt hem door naar de dashboard
    public function LoginStore(Request $req) {
        $users = DB::table('users')->where([
            'email' => $req->email,
            'password' => $req->password
        ])->get()->first();

        if (isset($users)) {
            $req->session()->put('USE_ID', $users->id);

            return redirect("Locations");
        } else {
            echo "wachtwoord of email is fout";
        }

    }

    // logt de user uit en verwijderd zijn session
    function logout(Request $req) {
        $req->session()->forget('USE_ID');

        return redirect('Login');
    }
}
