@extends('pendaftaran.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Data Shipping
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
            <form method="post" action="{{ route('pendaftaran.store') }}" id="myForm">
            @csrf   
                {{--  <div class="form-group">
                    <label for="No_Resi">Nim</label>
                    <input type="No_Resi" name="no_resi" class="formcontrol" id="No_Resi" aria-describedby="No_Resi" >
                </div>  --}}
                    <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="nama_mahasiswa" class="formcontrol" id="nama_mahasiswa" aria-describedby="Nama_Barang" >
                </div>
                    <div class="form-group">
                    <label for="Tempat Lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="formcontrol" id="tempat_lahir" aria-describedby="Tempat Lahir" >
                </div>
                    <div class="form-group">
                    <label for="Tanggal Lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="formcontrol" id="tanggal_lahir" aria-describedby="Tanggal Lahir" >
                </div>
                    <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="text" name="alamat" class="formcontrol" id="alamat" aria-describedby="Alamat" >
                </div>
                    <div class="form-group">
                    <label for="No_Telp">No.Telepon</label>
                    <input type="text" name="no_telp" class="formcontrol" id="no_telp" aria-describedby="No_Telp" >
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection