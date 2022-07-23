<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Voter;
use App\Models\Token;

class VoterController extends Controller
{
    public function index(){
        $batas = 20;
        $tabel_voter = Voter::all();
        $no = 0;

        return view('login/voter', compact('tabel_voter', 'no'));
    }

    public function tambah(Request $req){
        $voter = new Voter;
        $this->validate($req,[
            'email'     => 'required|string',
            'nim'       => 'required|string',
            'angkatan'  => 'required|numeric'
        ]);
        $voter->email = $req->email;
        $voter->nim = $req->nim;
        $voter->angkatan = $req->angkatan;
        $voter->created_at = NULL;
        $voter->updated_at = NULL;
        $voter->save();

        return $this->token($req->email)->with('pesan', 'Voter berhasil ditambahkan');
    }

    
    public function token($req){
        $token = new Token;
        $token->email = $req;
        $token->token = getToken();
        $token->created_at = NULL;
        $token->updated_at = NULL;
        $token->save();

        return redirect('/home/voter')->with('pesan', 'Token berhasil digenerate!');
    }


}






function getToken(){
    $char = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $token = '';

    for ($i=0; $i < 6; $i++){
        $index = rand(0, strlen($char)-1);
        $token .= $char[$index];
    }
    return $token;
}



