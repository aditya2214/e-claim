@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <form action="{{url('registrasi_klaim/save')}}" method="post">
                {{ csrf_field() }}
                    <h1>REGISTRATION CLAIM</h1>
                    <div class="form-group">
                        <label  for="" style="color:white;">Nomor polis</label>
                        <input name="Nomor_Polis" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label  for="" style="color:white;">Tanggal kejadian</label>
                        <input name="Tanggal_kejadian" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" style="color:white;" >Waktu kejadian</label>
                        <input  name="Waktu_kejadian" type="time" class="form-control">
                    </div>
                    <div class="form-group">
                        <label  for="" style="color:white;" >Penyebab </label>
                        <input  name="Penyebab" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label  for="" style="color:white;" >Deskripsi kejadian</label>
                        <input name="Deskripsi_kejadian" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label  for="" style="color:white;" >Estimasi kerugian</label>
                        <input name="Estimasi_kerugian" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label  for="" style="color:white;" >Nomor rekening</label>
                        <input name="Nomor_rekening" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label  for="" style="color:white;" >Nama bank</label>
                        <input name="Nama_bank" type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Validation</button>
                </form>
            </div>
            <div class="col-md-3">
                
            </div>
        </div>
    </div>
@endsection