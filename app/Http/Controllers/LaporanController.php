<?php

namespace App\Http\Controllers;

use App\Hasil;
use App\Jadwal;
use App\Rekanan;
use App\Teknisi;
use App\Pengguna;
use App\Departemen;
use App\Pemusnahan;
use App\Pengeluaran;
use App\SerahTerima;
use App\Infrastruktur;
use App\Kios;
use App\Pedagang;
use App\Pegawai;
use App\Peralihan;
use App\Retribusi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $pedagang = Pedagang::get();
        return view('laporan.index', compact('pedagang'));
    }
    // public function perpedagang()
    // {
    //     $data = Pedagang::get();
    //     return view('print.pedagang', compact('data'));
    // }
    public function pedagang()
    {
        $data = Pedagang::get();
        return view('print.pedagang', compact('data'));
    }
    public function pegawai()
    {
        $data = Pegawai::get();
        return view('print.pegawai', compact('data'));
    }
    public function kios()
    {
        $data = Kios::get();
        return view('print.kios', compact('data'));
    }

    public function perpedagang(Request $req)
    {
        $pedagang_id = $req->pedagang_id;
        $pedagang = Pedagang::find($pedagang_id);
        $data = Retribusi::where('pedagang_id', $pedagang_id)->get()->map(function ($item) {
            if ($item->bulan == 1) {
                $item->bulan = 'Januari';
            }
            if ($item->bulan == 2) {
                $item->bulan = 'Februari';
            }
            if ($item->bulan == 3) {
                $item->bulan = 'Maret';
            }
            if ($item->bulan == 4) {
                $item->bulan = 'April';
            }
            if ($item->bulan == 5) {
                $item->bulan = 'Mei';
            }
            if ($item->bulan == 6) {
                $item->bulan = 'Juni';
            }
            if ($item->bulan == 7) {
                $item->bulan = 'Juli';
            }
            if ($item->bulan == 8) {
                $item->bulan = 'Agustus';
            }
            if ($item->bulan == 9) {
                $item->bulan = 'September';
            }
            if ($item->bulan == 10) {
                $item->bulan = 'Oktober';
            }
            if ($item->bulan == 11) {
                $item->bulan = 'November';
            }
            if ($item->bulan == 12) {
                $item->bulan = 'Desember';
            }
            return $item;
        });

        return view('print.perpedagang', compact('data', 'pedagang'));
    }


    public function periode(Request $req)
    {
        $from = $req->mulai;
        $to = $req->sampai;

        if ($req->jenis == '1') {
            $data = Retribusi::whereBetween('tanggal_bayar', [$from, $to])->get()->map(function ($item) {
                if ($item->bulan == 1) {
                    $item->bulan = 'Januari';
                }
                if ($item->bulan == 2) {
                    $item->bulan = 'Februari';
                }
                if ($item->bulan == 3) {
                    $item->bulan = 'Maret';
                }
                if ($item->bulan == 4) {
                    $item->bulan = 'April';
                }
                if ($item->bulan == 5) {
                    $item->bulan = 'Mei';
                }
                if ($item->bulan == 6) {
                    $item->bulan = 'Juni';
                }
                if ($item->bulan == 7) {
                    $item->bulan = 'Juli';
                }
                if ($item->bulan == 8) {
                    $item->bulan = 'Agustus';
                }
                if ($item->bulan == 9) {
                    $item->bulan = 'September';
                }
                if ($item->bulan == 10) {
                    $item->bulan = 'Oktober';
                }
                if ($item->bulan == 11) {
                    $item->bulan = 'November';
                }
                if ($item->bulan == 12) {
                    $item->bulan = 'Desember';
                }
                return $item;
            });
            return view('print.retribusi', compact('data', 'from', 'to'));
        }
        if ($req->jenis == '2') {
            $data = Peralihan::whereBetween('created_at', [$from, $to])->get()->map(function ($item) {
                $item->pedagang_lama = Pedagang::find($item->pedagang_lama);
                $item->pedagang_baru = Pedagang::find($item->pedagang_baru);
                return $item;
            });
            return view('print.peralihan', compact('data', 'from', 'to'));
        }
    }
}
