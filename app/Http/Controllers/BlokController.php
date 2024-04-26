<?php

namespace App\Http\Controllers;

use App\Blok;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BlokController extends Controller
{

    public function index()
    {
        $data = Blok::all();
        return view('backend.blok.index', compact('data'));
    }

    public function add()
    {
        return view('backend.blok.add');
    }

    public function save(Request $req)
    {
        $s = new Blok;
        $s->nomor = $req->nomor;
        $s->luas = $req->luas;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/blok');
    }

    public function edit($id)
    {
        $data = Blok::find($id);
        return view('backend.blok.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $s = Blok::find($id);
        $s->nomor = $req->nomor;
        $s->luas = $req->luas;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/blok');
    }

    public function delete($id)
    {
        $delete = Blok::find($id)->delete();
        Alert::success('Data Berhasil Di Hapus', 'Info Message');
        return back();
    }
}
