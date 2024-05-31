<?php

namespace App\Http\Controllers;

use App\Blok;
use App\Kios;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KiosController extends Controller
{
    public function index()
    {
        $data = Kios::all();
        return view('backend.kios.index', compact('data'));
    }

    public function add()
    {
        $blok = Blok::get();
        return view('backend.kios.add', compact('blok'));
    }

    public function save(Request $req)
    {
        $s = new Kios;
        $s->nomor = $req->nomor;
        $s->nama = $req->nama;
        $s->blok_id = $req->blok_id;
        $s->status = $req->status;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/kios');
    }

    public function edit($id)
    {
        $data = Kios::find($id);
        $blok = Blok::get();
        return view('backend.kios.edit', compact('data', 'blok'));
    }

    public function update(Request $req, $id)
    {
        $s = Kios::find($id);
        $s->nomor = $req->nomor;
        $s->nama = $req->nama;
        $s->blok_id = $req->blok_id;
        $s->status = $req->status;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/kios');
    }

    public function delete($id)
    {
        $delete = Kios::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
