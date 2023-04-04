@extends('posyandus.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Data
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>No Urut : </b>{{$Posyandu->No Urut}}</li>
                    <li class="list-group-item"><b>Nama : </b>{{$Posyandu->Nama}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Posyandu->Alamat}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir : </b>{{$Posyandu->Tanggal Lahir}}</li>
                    <li class="list-groupitem"><b>BB Lahir : </b>{{$Posyandu->Bb_Lahir}}</li>
                    <li class="list-groupitem"><b>TB Lahir : </b>{{$Posyandu->Tb_Lahir}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('posyandus.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
