<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::all();
        return view('backend.pegawai.index', compact('data'));
    }

    public function add()
    {
        return view('backend.pegawai.add');
    }

    public function save(Request $req)
    {
        $s = new Pegawai;
        $s->nip = $req->nip;
        $s->nama = $req->nama;
        $s->alamat = $req->alamat;
        $s->jkel = $req->jkel;
        $s->telp = $req->telp;
        $s->jabatan = $req->jabatan;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $data = Pegawai::find($id);
        return view('backend.pegawai.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $s = Pegawai::find($id);
        $s->nip = $req->nip;
        $s->nama = $req->nama;
        $s->alamat = $req->alamat;
        $s->jkel = $req->jkel;
        $s->telp = $req->telp;
        $s->jabatan = $req->jabatan;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/pegawai');
    }

    public function delete($id)
    {
        $delete = Pegawai::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
