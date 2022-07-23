<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;
class PengaturanController extends Controller
{
    public function index(){
        $pgt = Pengaturan::all();

        return view('login/pengaturan', compact('pgt'));
    }

    public function tambah(Request $req){

        $pg = new Pengaturan;
        $pg->nama_kegiatan = $req->namakeg;
        $pg->dt_mulai = $req->start;
        $pg->dt_akhir = $req->end;
        $pg->created_at = NULL;
        $pg->updated_at = NULL;
        $pg->save();

        return redirect('/home/pengaturan');
    }
}
