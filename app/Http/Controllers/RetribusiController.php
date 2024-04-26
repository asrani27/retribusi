<?php

namespace App\Http\Controllers;

use App\Jenis;
use App\Pedagang;
use App\Retribusi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RetribusiController extends Controller
{
    public function index()
    {
        $data = Retribusi::all()->map(function ($item) {
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
        return view('backend.retribusi.index', compact('data'));
    }

    public function add()
    {
        $pedagang = Pedagang::get();
        $jenis = Jenis::get();
        return view('backend.retribusi.add', compact('pedagang', 'jenis'));
    }

    public function save(Request $req)
    {
        $s = new Retribusi;
        $s->tanggal_bayar = $req->tanggal;
        $s->pedagang_id = $req->pedagang_id;
        $s->jenis_id = $req->jenis_id;
        $s->bulan = $req->bulan;
        $s->tahun = $req->tahun;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/retribusi');
    }

    public function edit($id)
    {
        $data = Retribusi::find($id);
        $pedagang = Pedagang::get();
        $jenis = Jenis::get();
        return view('backend.retribusi.edit', compact('data', 'pedagang', 'jenis'));
    }

    public function update(Request $req, $id)
    {
        $s = Retribusi::find($id);
        $s->tanggal_bayar = $req->tanggal;
        $s->pedagang_id = $req->pedagang_id;
        $s->jenis_id = $req->jenis_id;
        $s->bulan = $req->bulan;
        $s->tahun = $req->tahun;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/retribusi');
    }

    public function delete($id)
    {
        $delete = Retribusi::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
