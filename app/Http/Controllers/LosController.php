<?php

namespace App\Http\Controllers;

use App\Los;
use App\Blok;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LosController extends Controller
{
    public function index()
    {
        $data = Los::all();
        return view('backend.los.index', compact('data'));
    }

    public function add()
    {
        $blok = Blok::get();
        return view('backend.los.add', compact('blok'));
    }

    public function save(Request $req)
    {
        $s = new Los;
        $s->nomor = $req->nomor;
        $s->nama = $req->nama;
        $s->blok_id = $req->blok_id;
        $s->status = $req->status;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/los');
    }

    public function edit($id)
    {
        $data = Los::find($id);
        $blok = Blok::get();
        return view('backend.los.edit', compact('data', 'blok'));
    }

    public function update(Request $req, $id)
    {
        $s = Los::find($id);
        $s->nomor = $req->nomor;
        $s->nama = $req->nama;
        $s->blok_id = $req->blok_id;
        $s->status = $req->status;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/los');
    }

    public function delete($id)
    {
        $delete = Los::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
