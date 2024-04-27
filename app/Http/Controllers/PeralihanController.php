<?php

namespace App\Http\Controllers;

use App\Pedagang;
use App\Peralihan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PeralihanController extends Controller
{
    public function index()
    {
        $data = Peralihan::all()->map(function ($item) {
            $item->pedagang_lama = Pedagang::find($item->pedagang_lama);
            $item->pedagang_baru = Pedagang::find($item->pedagang_baru);
            return $item;
        });
        return view('backend.peralihan.index', compact('data'));
    }

    public function add()
    {
        $pedagang_lama = Pedagang::get();
        $pedagang_baru = Pedagang::get();
        return view('backend.peralihan.add', compact('pedagang_lama', 'pedagang_baru'));
    }

    public function save(Request $req)
    {
        $s = new Peralihan;
        $s->tanggal = $req->tanggal;
        $s->biaya = $req->biaya;
        $s->pedagang_lama = $req->pedagang_lama;
        $s->pedagang_baru = $req->pedagang_baru;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/peralihan');
    }

    public function edit($id)
    {
        $data = Peralihan::find($id);
        $pedagang_lama = Pedagang::get();
        $pedagang_baru = Pedagang::get();
        return view('backend.peralihan.edit', compact('data', 'pedagang_lama', 'pedagang_baru'));
    }

    public function update(Request $req, $id)
    {
        $s = Peralihan::find($id);
        $s->tanggal = $req->tanggal;
        $s->biaya = $req->biaya;
        $s->pedagang_lama = $req->pedagang_lama;
        $s->pedagang_baru = $req->pedagang_baru;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/peralihan');
    }

    public function delete($id)
    {
        $delete = Peralihan::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
