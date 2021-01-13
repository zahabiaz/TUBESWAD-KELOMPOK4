<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuti;
use App\User;

class CutiController extends Controller
{
    public function formtambahcuti(){
        return view('tambahcuti');
    }

    public function tambahcuti(Request $request){
        $user = auth()->user()->id;

        $datacuti = Cuti::where('user_id',$user)->where('status','sukses')->count();

        //dd($datacuti);
        
        if($datacuti > 6){
             return Redirect('/historycuti')->with('error','Kamu melebihi Batas cuti yaitu hanya 7 kali dalam setahun');
        }else{
            $data = Cuti::create([
            'tanggal'=> $request->tanggal,
            'tanggal_selesai'=> $request->tanggal_selesai,
            'keterangan'=> $request->keterangan,
            'status'=> 'pending',
            'user_id'=> auth()->user()->id,
        ]);
        $data->save();
        return Redirect('/historycuti')->with('status','Data Berhasil Di Simpan');
        }

    }

    public function historycuti(){
        $user = auth()->user()->id;
        $data = Cuti::where('user_id',$user)->get();
        return view('historidatacuti',\compact('data',));
    }


    public function datapengajuancuti(){
        $data = Cuti::where('status','pending')->get();
        return view('cuti.datapengajuancuti',\compact('data'));
    }

     public function datapengajuancutisukses(){
        $data = Cuti::where('status','sukses')->get();
        return view('cuti.datapengajuancutisukses',\compact('data'));
    }

     public function datapengajuancutigagal(){
        $data = Cuti::where('status','gagal')->get();
        return view('cuti.datapengajuancutigagal',\compact('data'));
    }

    public function cutiupdate($id){
        $data = Cuti::find($id);
        if($data->status == 'pending'){
            $data->update(['status' => 'sukses']); 
        }elseif($data->status == 'sukses'){
            $data->update(['status' => 'pending']); 
        }
        $data->save();

        return redirect('/datapengajuancuti');
    }

    public function tolakcuti($id){
        $data = Cuti::find($id);
        if($data->status == 'pending'){
            $data->update(['status' => 'gagal']); 
        }elseif($data->status == 'gagal'){
            $data->update(['status' => 'pending']); 
        }
        $data->save();

        return redirect('/datapengajuancuti');
    }
}
