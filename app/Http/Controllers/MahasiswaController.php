<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = DB::table('tb_mahasiswa')->get();
        return view('mahasiswa',['mahasiswa'=>$mahasiswa]);
    }

    public function tambah(){
        return view('tambahM');
    }
    public function store(Request $request){
        DB::table('tb_mahasiswa')->insert([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'no_tlp'=>$request->notlp

        ]);
        return redirect('/mahasiswa');

    }

    public function edit($id){
        $mahasiswa = DB::table('tb_mahasiswa')->where('nim',$id)->get();
        return view('edit',['mahasiswa'=>$mahasiswa]);
    }

    public function update(Request $request){
        DB::table('tb_mahasiswa')->where('nim',$request->id)->update([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'no_tlp'=>$request->notlp
        ]);
        return redirect('/mahasiswa');  
    }

    public function hapus($nim){
        DB::table('tb_mahasiswa')->where('nim',$nim)->delete();
        return redirect('/mahasiswa');
    }
}
