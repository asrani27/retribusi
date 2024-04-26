<?php

namespace App\Http\Controllers;

use App\Jenis;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JenisController extends Controller
{
    public function index()
    {
        $data = Jenis::all();
        return view('backend.jenis.index', compact('data'));
    }

    public function add()
    {
        return view('backend.jenis.add');
    }

    public function save(Request $req)
    {
        $s = new Jenis;
        $s->nama = $req->nama;
        $s->tarif = $req->tarif;
        $s->jatuh_tempo = $req->jatuh_tempo;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/jenis');
    }

    public function edit($id)
    {
        $data = Jenis::find($id);
        return view('backend.jenis.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $s = Jenis::find($id);
        $s->nama = $req->nama;
        $s->tarif = $req->tarif;
        $s->jatuh_tempo = $req->jatuh_tempo;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/jenis');
    }

    public function delete($id)
    {
        $delete = Jenis::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
