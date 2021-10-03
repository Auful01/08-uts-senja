@extends('pendaftaran.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>PENDAFTARAN SISWA</h2>
            </div>
            <div class="float-left my-2">
                <a class="btn btnsuccess" href="{{ route('pendaftaran.create') }}">Input Data Pengiriman</a>
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
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No.Telp</th>
            <th width="300px">Action</th>
        </tr>
        @foreach ($pendaftaran as $shp)
        <tr>

            <td>{{ $shp->nim }}</td>
            <td>{{ $shp->nama_mahasiswa  }}</td>
            <td>{{ $shp->tempat_lahir }}</td>
            <td>{{ $shp->tanggal_lahir }}</td>
            <td>{{ $shp->alamat_pengiriman }}</td>
             <td>{{ $shp->no_telp }}</td>
            <td>
            <form action="{{ route('pendaftaran.destroy',$shp->nim ) }}" method="POST">
                    <a class="btn btninfo" href="{{ route('pendaftaran.show',$shp->nim) }}">Show</a>
                    <a class="btn btnprimary" href="{{ route('pendaftaran.edit',$shp->nim) }}">Edit</a>
                    
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