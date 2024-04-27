<?php

namespace App\Http\Controllers;

use App\Role;
use App\Pedagang;
use App\Registrasi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegistrasiController extends Controller
{
    public function index()
    {
        $data = Registrasi::all();
        return view('backend.registrasi.index', compact('data'));
    }

    public function add()
    {
        $pedagang = Pedagang::get();
        return view('backend.registrasi.add', compact('pedagang'));
    }

    public function save(Request $req)
    {
        $s = new registrasi;
        $s->tanggal = $req->tanggal;
        $s->pedagang_id = $req->pedagang_id;
        $s->nomor = $req->nomor;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/registrasi');
    }

    public function edit($id)
    {
        $data = Registrasi::find($id);
        $pedagang = Pedagang::get();
        return view('backend.registrasi.edit', compact('data', 'pedagang'));
    }

    public function update(Request $req, $id)
    {
        $s = Registrasi::find($id);
        $s->tanggal = $req->tanggal;
        $s->pedagang_id = $req->pedagang_id;
        $s->nomor = $req->nomor;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/registrasi');
    }

    public function delete($id)
    {
        $delete = Registrasi::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
