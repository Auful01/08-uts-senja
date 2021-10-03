@extends('users.layout')

@section('content')
    
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Transaksi
            </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>No Resi : </b>{{$shipping->no_resi}}</li>
                <li class="list-group-item"><b>Nama Barang : </b>{{$shipping->nama_barang}}</li>
                <li class="list-group-item"><b>Harga : </b>{{$shipping->harga}}</li>
                <li class="list-group-item"><b>Nama Pengirim : </b>{{$shipping->nama_pengirim}}</li>
                <li class="list-group-item"><b>Nama Penerima : </b>{{$shipping->nama_penerima}}</li>
                <li class="list-group-item"><b>Alamat Pengiriman : </b>{{$shipping->alamat_pengiriman}}</li>
                <li class="list-group-item"><b>Jasa Pengiriman : </b>{{$shipping->via_pengiriman}}</li>
                <li class="list-group-item"><b>No Telepon : </b>{{$shipping->no_telp}}</li>
                <li class="list-group-item"><b>Tanggal Kirim : </b>{{$shipping->tanggal_kirim}}</li>
                <li class="list-group-item"><b>Tanggal Sampai : </b>{{$shipping->tanggal_sampai}}</li>
            </ul>
        </div>
        <a class="btn btn-success mt-3" href="{{ route('shipping.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection