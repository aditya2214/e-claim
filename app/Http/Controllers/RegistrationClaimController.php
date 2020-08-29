<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationClaimController extends Controller
{
    //

    public function store(Request $request){

        $registration_claim = new \App\RegistrationClaim;
        $registration_claim->Nomor_Polis = $request->Nomor_Polis;
        $registration_claim->Tanggal_kejadian = $request->Tanggal_kejadian;
        $registration_claim->Waktu_kejadian = $request->Waktu_kejadian;
        $registration_claim->Penyebab = $request->Penyebab;
        $registration_claim->Deskripsi_kejadian = $request->Deskripsi_kejadian;
        $registration_claim->Estimasi_kerugian = $request->Estimasi_kerugian;
        $registration_claim->Nomor_rekening = $request->Nomor_rekening;
        $registration_claim->Nama_bank = $request->Nama_bank;
        $tahun = date('y');
        $bulan = date('m');
        $data = \App\RegistrationClaim::whereYear('created_at',date('Y'))->whereMonth('created_at',date('m'))->count();
        $invID = str_pad(  $data + 1, 3, "0", STR_PAD_LEFT );
        $nomor_claim = $tahun.$bulan.$invID;
        $registration_claim->Nomor_Klaim = $nomor_claim;
        $registration_claim->Status_klaim = 0;

        $registration_claim->save();

        return redirect('');
    }

    public function check(){
        $return_registration_claim = \App\RegistrationClaim::all();

        return view('konten.check_claim',compact('return_registration_claim'));
    }
}
