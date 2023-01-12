<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function baca(){
        return view('baca2',[
            'data_dokter'=>Dokter::all()
        ]);
    }
    public function create(){
        return view('create2',[
            'doc'=>Dokter::all()
        ]);
    }
    public function proses_tambah(Request $request){
        $rule_validasi = [
            'name'=>'required',
            'usia'=>'required',
            'jenis_kelamin'=>'required',
        ];
        $pesan_validasi = [
            'name.required'=>'Nama Di Butuhkan',

            'usia.required'=>'Usia Di Butuhkan',

            'jenis_kelamin.required'=>'Jenis Kelamin Di Butuhkan',
        ];
        $a=$request->validate($rule_validasi, $pesan_validasi);

        Dokter::create($a);

        return redirect('/baca/dokter')->with('status', 'Data Dokter Telah Di Simpan');
    }
    public function ubah($id){
        $data_dokter = Dokter::findOrFail($id);
        return view('ubahdokter', [
            'data_dokter' => $data_dokter,
            'doc'=>Dokter::all(),
        ]);
    }
    public function proses_ubah(Request $request ,Dokter $dokter){
        $rule_validasi = [
            'name'=>'required',
            'usia'=>'required',
            'jenis_kelamin'=>'required',
        ];
        $pesan_validasi = [
            'name.required'=>'Nama Di Butuhkan',

            'usia.required'=>'Usia Di Butuhkan',

            'jenis_kelamin.required'=>'Jenis Kelamin Di Butuhkan',
        ];
        $a=$request->validate($rule_validasi, $pesan_validasi);

        Dokter::where('id', $request->id)->update($a);

        return redirect('/baca/dokter')->with('status', 'Data Dokter Telah Di Update');
    }
    public function hapus($id){
        $data_dokter = Dokter::firstWhere('id', $id);
        $data_dokter->delete();
        return redirect('/baca/dokter')->with('hapus', 'Data Dokter Telah Di Hapus');
    }
}
