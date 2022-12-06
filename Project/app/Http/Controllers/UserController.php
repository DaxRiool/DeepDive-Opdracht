<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function RegisterStore(Request $req) {
        $users = DB::table('users')->where([
            'email' => $req->email,
        ]);

        if (isset($users)) {
            echo "gebruiker bestaat al";
        }

        DB::table('users')->insertGetID([
            'email' => $req->email,
            'password' => $req->password
        ]);

        return redirect("Login");
    }

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

    function logout(Request $req) {
        $req->session()->forget('USE_ID');

        return redirect('Login');
    }}
