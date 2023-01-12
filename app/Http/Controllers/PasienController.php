<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function baca(){

        return view('baca', [
            'data'=>Pasien::all()
        ]);
    }
    public function create(){

        return view('create',[
            'data'=>Pasien::all(),
            'doc'=>Dokter::all()
        ]);
    }
    public function proses_tambah(Request $request){
        $rule_validasi = [
            'name'=>'required',
            'usia'=>'required',
            'jenis_kelamin'=>'required',
            'penyakit'=>'required',
            'dokter_id'=>'required',
        ];
        $pesan_validasi = [
            'name.required'=>'Nama Di Butuhkan',

            'usia.required'=>'Usia Di Butuhkan',

            'jenis_kelamin.required'=>'Jenis Kelamin Di Butuhkan',

            'penyakit.required'=>'Penyakit Di Butuhkan Kalo Gak Ngapain Ke RS',
            'dokter_id.required'=>'Kalo Dak milih dokter nak berobat samo siapo?'
        ];
        $a=$request->validate($rule_validasi, $pesan_validasi);

        Pasien::create($a);

        return redirect('/baca')->with('status', 'Data Pasien Telah Di Simpan');
    }
    public function ubah($id){
        $data_pasien = Pasien::firstWhere('id',$id);
        return view('ubah', [
            'data_pasien' => $data_pasien,
            'doc'=>Dokter::all(),
            'data'=>Pasien::all()

        ]);
    }
    public function proses_ubah(Request $request ,Pasien $pasien){
        $rule_validasi = [
            'name'=>'required',
            'usia'=>'required',
            'jenis_kelamin'=>'required',
            'penyakit'=>'required',
            'dokter_id'=>'required',
        ];
        $pesan_validasi = [
            'name.required'=>'Nama Di Butuhkan',

            'usia.required'=>'Usia Di Butuhkan',

            'jenis_kelamin.required'=>'Jenis Kelamin Di Butuhkan',

            'penyakit.required'=>'Penyakit Di Butuhkan Kalo Gak Ngapain Ke RS',
            'dokter_id.required'=>'Kalo Dak milih dokter nak berobat samo siapo?'
        ];
        $a=$request->validate($rule_validasi, $pesan_validasi);

        Pasien::where('id', $request->id)->update($a);

        return redirect('/baca')->with('status', 'Data Pasien Telah Di Update');
    }
    public function hapus($id){
        $data_pasien = Pasien::firstWhere('id', $id);
        $data_pasien->delete();
        return redirect('/baca')->with('hapus', 'Data Pasien Telah Di Hapus');
    }
}
