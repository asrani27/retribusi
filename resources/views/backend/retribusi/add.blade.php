@extends('layouts.master')

@push('css')
<link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{route('retribusi')}}">
                    @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal" value="{{\Carbon\Carbon::now()->format('Y-m-d')}}">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">pedagang</label>
                      <div class="col-sm-10">
                        <select name="pedagang_id" class="form-control" required>
                          <option value="">-pilih-</option>
                          @foreach ($pedagang as $item)
                              <option value="{{$item->id}}">{{$item->nama}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">jenis</label>
                      <div class="col-sm-10">
                        <select name="jenis_id" class="form-control" required>
                          <option value="">-pilih-</option>
                          @foreach ($jenis as $item)
                              <option value="{{$item->id}}">{{$item->nama}}, tarif : {{$item->tarif}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Untuk Pembayaran Bulan</label>
                      <div class="col-sm-2">
                        <select name="bulan" class="form-control" required>
                          <option value="">-pilih-</option>
                          <option value="1">januari</option>
                          <option value="2">februari</option>
                          <option value="3">maret</option>
                          <option value="4">april</option>
                          <option value="5">mei</option>
                          <option value="6">juni</option>
                          <option value="7">juli</option>
                          <option value="8">agustus</option>
                          <option value="9">september</option>
                          <option value="10">oktober</option>
                          <option value="11">november</option>
                          <option value="12">desember</option>
                          
                        </select>
                      </div>
                      <div class="col-sm-2">
                        <select name="tahun" class="form-control" required>
                          <option value="">-pilih-</option>
                          <option value="2024">2024</option>
                        </select>
                      </div>
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info"><i class="icon fas fa-save"></i>
                        Simpan</button>
                    <a href="/retribusi" class="btn btn-default float-right">Kembali</a>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
    
</div>
@endsection

@push('js')
<script>
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))

      return false;
    return true;
  }
</script>
@endpush
