@extends('users.layout')

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
            <form method="post" action="{{ route('shipping.store') }}" id="myForm">
            @csrf   
                <div class="form-group">
                    <label for="No_Resi">No Resi</label>
                    <input type="No_Resi" name="no_resi" class="formcontrol" id="No_Resi" aria-describedby="No_Resi" >
                </div>
                    <div class="form-group">
                    <label for="Nama_Barang">Nama Barang</label>
                    <input type="Nama_Barang" name="nama_barang" class="formcontrol" id="Nama_Barang" aria-describedby="Nama_Barang" >
                </div>
                    <div class="form-group">
                    <label for="Harga">Harga</label>
                    <input type="Harga" name="harga" class="formcontrol" id="Harga" aria-describedby="Harga" >
                </div>
                    <div class="form-group">
                    <label for="Nama_Pengirim">Nama Pengirim</label>
                    <input type="Nama_Pengirim" name="nama_pengirim" class="formcontrol" id="Nama_Pengirim" aria-describedby="Nama_Pengirim" >
                </div>
                    <div class="form-group">
                    <label for="Nama_Penerima">Nama Penerima</label>
                    <input type="Nama_Penerima" name="nama_penerima" class="formcontrol" id="Nama_Penerima" aria-describedby="Nama_Penerima" >
                </div>
                    <div class="form-group">
                    <label for="Alamat_Pengiriman">Alamat Pengiriman</label>
                    <input type="Alamat_Pengiriman" name="alamat_pengiriman" class="formcontrol" id="Alamat_Pengiriman" aria-describedby="Alamat_Pengiriman" >
                </div>
                    <div class="form-group">
                    <label for="jasa">Jasa Pengiriman</label>
                    <input type="Via_Pengiriman" name="via_pengiriman" class="formcontrol" id="Via_Pengiriman" aria-describedby="Via_Pengiriman" >
                </div>
                    <div class="form-group">
                    <label for="No_Telp">No.Telepon</label>
                    <input type="No_Telp" name="no_telp" class="formcontrol" id="No_Telp" aria-describedby="No_Telp" >
                </div>
                    <div class="form-group">
                    <label for="Tanggal_Kirim">Tanggal Kirim</label>
                    <input type="date" name="tanggal_kirim" class="formcontrol" id="Tanggal_Kirim" aria-describedby="Tanggal_Kirim" >
                </div>
                    <div class="form-group">
                    <label for="Tanggal_Sampai">Tanggal Sampai</label>
                    <input type="date" name="tanggal_sampai" class="formcontrol" id="Tanggal_Sampai" aria-describedby="Tanggal_Sampai" >
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection