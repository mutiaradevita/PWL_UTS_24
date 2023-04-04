@extends('posyandus.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Data
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('mahasiswas.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="no_urut">No Urur</label>
                        <input type="text" name="no_urut" class="formcontrol" id="no_urut" aria-describedby="Nim">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="nama" name="nama" class="formcontrol" id="nama" aria-describedby="Nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="alamat" name="alamat" class="formcontrol" id="alamat" aria-describedby="password">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="tanggal_lahir" name="tanggal_lahir" class="formcontrol" id="tanggal_lahir" aria-describedby="tanggal_lahir">
                    </div>
                    <div class="form-group">
                        <label for="bb_lahir">BB Lahir</label>

                        <input type="bb_lahir" name="bb_lahir" class="formcontrol" id="bb_lahir" aria-describedby="bb_lahir">
                    </div>
                    <div class="form-group">
                        <label for="tb_lahir">TB Lahir</label>

                        <input type="tb_lahir" name="tb_lahir" class="formcontrol" id="tb_lahir" aria-describedby="bb_lahir">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
