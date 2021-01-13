<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Absensi;
use App\User;

class AbsensiController extends Controller
{
    public function absensiharini(){

        $data = Absensi::whereDate('created_at', Carbon::today())->get();
        return view('absensi.absenhariini',compact('data'));
    }

    public function inputabsensihariini(){
        $pegawai = User::where('role','pegawai')->get(); 
        foreach($pegawai as $s){   
        $absensi = new \App\Absensi;
        $absensi->user_id= $s->id;
        $absensi->status='alfa';
        $absensi->bukti_absensi='belum';
        $absensi->save();
        }
        return redirect('/absensihariini');
    }

    public function absensipegawai(){
        $auth = auth()->user()->id;
        $data = Absensi::whereDate('created_at', Carbon::today())->where('user_id',$auth)->get();
        //dd($data);

        return view('absensipegawai',compact('data'));
    }

    public function updateabsensi($id){
        $data = Absensi::find($id);
        if($data->status == 'alfa'){
            $data->update(['status' => 'hadir']); 
        }elseif($data->status == 'hadir'){
            $data->update(['status' => 'alfa']); 
        }
        $data->save();

        return redirect('/absensipegawai')->with('status','Berhasil Melakukan Absensi');
    }

    public function buktiabsensi($id){
        $data = Absensi::find($id);
        return view('forminputbuktipembayaran',['data'=>$data]); 
    }

    public function uploadbuktiabsensi(Request $request,$id){
        $data = Absensi::find($id);
        $data->update($request->all());
        if($request->hasFile('bukti_absensi')){
            $request->file('bukti_absensi')->move('images/',$request->file('bukti_absensi')->getClientOriginalName());
            $data->bukti_absensi= $request->file('bukti_absensi')->getClientOriginalName();
            $data->save();
        }
        return \redirect('/absensipegawai')->with('status','Data Bukti Absensi Berhasil');
    }


    public function updateadminabsensi($id){
        $data = Absensi::find($id);
        if($data->status == 'alfa'){
            $data->update(['status' => 'hadir']); 
        }elseif($data->status == 'hadir'){
            $data->update(['status' => 'alfa']); 
        }
        $data->save();

        return redirect('/absensihariini');
    }

    public function dataabsensipegawai(){
        $user = User::where('role','pegawai')->get();
        $absensi = Absensi::all();
        return view('absensi.dataseluruhabsensi',\compact('user','absensi'));
    }

    public function detailabsensipegawai($id){
        $data = Absensi::where('user_id',$id)->get();
        return view('absensi.detailabsensi',\compact('data'));
    }

    
    public function historyabsensi(){
        $user = auth()->user()->id;
        $data = Absensi::where('user_id',$user)->get();

        return view('historiabsensi',compact('data'));
    }

    public function profil(){
        
        return view('profil');
    }
    
}
