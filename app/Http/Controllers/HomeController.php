<?php

namespace App\Http\Controllers;

use App\Bibit;
use App\Barang;
use App\Departemen;
use App\Infrastruktur;
use App\Pengguna;
use App\Penjualan;
use App\Rekanan;
use App\Teknisi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('backend.home');
    }
}
