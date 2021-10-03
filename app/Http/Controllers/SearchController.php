<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
class SearchController extends Controller
{
    public function cari(Request $request)
    {
        $pendaftaran =Pendaftaran::when($request->keyword, function ($query) use ($request) {
            $query->where('nim', 'like', "%{$request->keyword}%")
            ->orWhere('nama_mahasiswa', 'like', "%{$request->keyword}%");
        })->paginate();
        return view('pendaftaran.index', compact('pendaftaran'));
    }
}
