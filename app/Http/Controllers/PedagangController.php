<?php

namespace App\Http\Controllers;

use App\Pedagang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PedagangController extends Controller
{
    public function index()
    {
        $data = Pedagang::all();
        return view('backend.pedagang.index', compact('data'));
    }

    public function add()
    {
        return view('backend.pedagang.add');
    }

    public function save(Request $req)
    {
        $s = new Pedagang;
        $s->nama = $req->nama;
        $s->alamat = $req->alamat;
        $s->jkel = $req->jkel;
        $s->telp = $req->telp;
        $s->tanggal = $req->tanggal;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/pedagang');
    }

    public function edit($id)
    {
        $data = Pedagang::find($id);
        return view('backend.pedagang.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $s = Pedagang::find($id);
        $s->nama = $req->nama;
        $s->alamat = $req->alamat;
        $s->jkel = $req->jkel;
        $s->telp = $req->telp;
        $s->tanggal = $req->tanggal;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/pedagang');
    }

    public function delete($id)
    {
        $delete = Pedagang::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
