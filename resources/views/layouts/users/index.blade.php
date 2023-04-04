@extends('posyandus.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>POSYANDU 24</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btnsuccess" href="{{ route('posyandus.create') }}"> Input Data</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No Urut</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Bb Lahir</th>
        <th>Tb Lahir</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($Posyandus as $Posyandu)
    <tr>

        <td>{{ $Posyandu->No Urut }}</td>
        <td>{{ $Posyandu->Nama }}</td>
        <td>{{ $Posyandu->Alamat }}</td>
        <td>{{ $Posyandu->Tanggal Lahir }}</td>
        <td>{{ $Posyandu->Bb Lahir }}</td>
        <td>{{ $Posyandu->Tb Lahir }}</td>
        <td>
            <form action="{{ route('mahasiswas.destroy',$Mahasiswa-
>Nim) }}" method="POST">

                <a class="btn btninfo" href="{{ route('posyandus.show',$Posyandu->no_urut) }}">Show</a>
                <a class="btn btnprimary" href="{{ route('posyandus.edit',$Posyandu>no_urut) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
