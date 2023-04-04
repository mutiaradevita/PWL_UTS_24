@extends('posyandus.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data
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
                <form method="post" action="{{ route('mahasiswas.update', $Mahasiswa-
>Nim) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="no_urut">No Urut</label>
                        <input type="text" name="no_urut" class="formcontrol" id="no_urut" value="{{ $Posyandu->no_urut }}" ariadescribedby="no_urut">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="nama" class="formcontrol" id="nama" value="{{ $Posyandu->nama }}" ariadescribedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="alamat" name="alamat" class="formcontrol" id="alamat" value="{{ $Posyandu->alamat }}" ariadescribedby="alamat">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="tanggal_lahir" name="tanggal_lahir" class="formcontrol" id="tanggal_lahir" value="{{ $Posyandu->tanggal_lahir }}" ariadescribedby="tanggal_lahir">
                    </div>
                    <div class="form-group">
                        <label for="bb_lahir">BB Lahir</label>
                        <input type="bb_lahir" name="bb_lahir" class="formcontrol" id="bb_lahir" value="{{ $Posyandu->bb_lahir }}" ariadescribedby="bb_lahir">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">TB Lahir</label>
                        <input type="tanggal_lahir" name="tb_lahir" class="formcontrol" id="tb_lahir" value="{{ $Posyandu->tb_lahir }}" ariadescribedby="tb_lahir">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
