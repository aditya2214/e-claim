@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Check Claim</div>
                <div class="panel-body">
                    <table id="DataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nomor polis</th>
                                <th>Tanggal kejadian</th>
                                <th>Waktu kejadian</th>
                                <th>Penyebab</th>
                                <th>Deskripsi kejadian</th>
                                <th>Status Claim</th>
                            </tr>
                        </thead>
                        <thead>
                            @foreach($return_registration_claim as $c)
                            <tr>
                                <td>{{$c->Nomor_Polis}}</td>
                                <td>{{$c->Tanggal_kejadian}}</td>
                                <td>{{$c->Waktu_kejadian}}</td>
                                <td>{{$c->Penyebab}}</td>
                                <td>{{$c->Deskripsi_kejadian}}</td>
                                @if($c->Status_klaim==0)
                                <td><label class="label label-danger">Dokumen Diajukan</label></td>
                                @elseif($c->Status_klaim==1)
                                <td><label class="label label-success">Dokumen Telah Disetujui</label></td>
                                <td><a href="#">Lihat Detail</a></td>
                                @endif
                            </tr>
                            @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
