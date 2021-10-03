@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Selamat Datang!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Login Berhasil') }}

                    <table class="table table-responsive">
                    <tr><th>Username</th><th>:</th><td>{{ $user->username}}</td></tr>
                    <tr><th>Name</th><th>:</th><td>{{ $user->name}}</td></tr>
                    <tr><th>Email</th><th>:</th><td>{{ $user->email}}</td></tr>
                    <tr><th>Created</th><th>:</th><td>{{ $user->created_at}}</td></tr>
                    </table>
                    <a class="btn btn-primary" href="{{ url('/pendaftaran') }}">LANJUT KE HALAMAN DASHBOARD</a>
                      