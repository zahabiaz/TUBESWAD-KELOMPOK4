<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cuti;
use App\Absensi;


class DashboardController extends Controller
{
    public function index(){
        
        $jumlahpegawai = User::where('role','pegawai')->count();
        $jumlahcuti = Cuti::count();
        $jumlahcutisukses = Cuti::where('status','sukses')->count();
        $jumlahcutipending = Cuti::where('status','pending')->count();
        $jumlahcutigagal = Cuti::where('status','gagal')->count();
        return view('dashboard.index',\compact('jumlahcuti','jumlahpegawai','jumlahcutisukses','jumlahcutipending','jumlahcutigagal'));
    }
}
