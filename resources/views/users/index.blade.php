@extends('users.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DATA PENGIRIMAN PWL EXPRESS</h2>
            </div>
            <div class="float-left my-2">
                <a class="btn btnsuccess" href="{{ route('shipping.create') }}">Input Data Pengiriman</a>
                <br> <a class="btn btnsuccess" href="{{ url('/home') }}"><-Logout</a>

            </div>
            <div class="float-right my-2">
                <form action="{{ url('/search') }}" method="GET">
                <input type="text" class="form-control mr-2" name="keyword" placeholder="Search" id="keyword">   
                <input type="submit" value="Cari">
            </form> 
            </div>
   
            </div>
        </div>
    </div>
{{--  class="btn btnsuccess"  --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No.Resi</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Nama Pengirim</th>
            <th>Nama Penerima</th>
            <th>Alamat Pengiriman</th>
            <th>Jasa Pengiriman</th>
            <th>No.Telp</th>
            <th>Tanggal Kirim</th>
            <th>Tanggal Sampai</th>
            <th width="300px">Action</th>
        </tr>
        @foreach ($shipping as $shp)
        <tr>

            <td>{{ $shp->no_resi }}</td>
            <td>{{ $shp->nama_barang  }}</td>
            <td>{{ $shp->harga }}</td>
            <td>{{ $shp->nama_pengirim }}</td>
            <td>{{ $shp->nama_penerima }}</td>
            <td>{{ $shp->alamat_pengiriman }}</td>
            <td>{{ $shp->via_pengiriman }}</td>
             <td>{{ $shp->no_telp }}</td>
            <td>{{ $shp->tanggal_kirim}}</td>
            <td>{{ $shp->tanggal_sampai }}</td>
            <td>
            <form action="{{ route('shipping.destroy',$shp->no_resi ) }}" method="POST">
                    <a class="btn btninfo" href="{{ route('shipping.show',$shp->no_resi) }}">Show</a>
                    <a class="btn btnprimary" href="{{ route('shipping.edit',$shp->no_resi) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
   {{ $shipping->links('pagination::bootstrap-4')}}
@endsection