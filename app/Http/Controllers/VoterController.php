<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Voter;
use App\Models\Token;

class VoterController extends Controller
{
    public function index(){
        $batas = 20;
        $tabel_voter = \DB::table('voter')->simplePaginate(10);
        // dd($tabel_voter);
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

    public function delete($req){
        \DB::table('token_tabel')->where('email', '=', $req)->delete();
        \DB::table('voter')->where('email', '=', $req)->delete();

        return redirect('/home/voter')->with('pesan', 'Voter berhasil dihapus!');
    }

    public function generateTokenAll(){
        $voter = Voter::all();
        foreach ($voter as $voter){
            $tokens = new Token;
            $tokens->email = $voter->email;
            $tokens->token = getToken();
            $tokens->created_at = NULL;
            $tokens->updated_at = NULL;
            $tokens->save();
        }

        return redirect('/home/voter')->with('pesan', 'Token berhasil digenerate ke semua voter!');
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



