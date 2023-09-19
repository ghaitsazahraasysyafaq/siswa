<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $data=siswa::all();
        return view('datasiswa', compact('data'));
    }
    public function tambahsiswa(){
        return view('tambahsiswa');
    }
    public function inputsiswa(Request $request){
        siswa::create($request->all());
        return redirect()->route('siswa');
    }
    public function tampilsiswa($id){
        $data=siswa::find($id);
        return view('tampilsiswa', compact('data'));
    }
    public function updatesiswa(Request $request,$id){
        $data=siswa::find($id);
        $data->update($request->all());
        return redirect()->route('siswa');

    }
    public function hapussiswa($id){
        $data=siswa::find($id);
        $data->delete();
        return redirect()->route('siswa');
    }

}
