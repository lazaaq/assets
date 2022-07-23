<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidat;
use App\Models\Token;
use App\Models\Voting;
class VotingController extends Controller
{
    public function index(){
        $kandidat_tabel = Kandidat::all();

        return view('login/voting', compact('kandidat_tabel'));
    }

    public function sync(Request $req){
        $token = Token::all();
        
        foreach ($token as $tkn){
            if ($req->token == $tkn->token){
                return redirect('/vote')->with('token', $tkn->token);
            }
        }
        return redirect('/');
    }

    public function submit(Request $req, $tkn){
        $vote = new Voting;
        $vote->no_urut = $req->no;
        $vote->created_at = NULL;
        $vote->updated_at = NULL;
        $vote->save();

        \DB::table('token_tabel')->where('token', '=', $tkn)->delete();
        return redirect('/');
    }
}
