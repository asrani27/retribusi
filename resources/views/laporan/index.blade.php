@extends('layouts.master')

@push('css')
<link rel="stylesheet" href="/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Laporan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
              {{-- <div class="card-header">
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/laporan/pegawai" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-file"></i> Lap. Pegawai</a>
                <a href="/laporan/pedagang" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-file"></i> Lap. Pedagang</a>
                <a href="/laporan/kios" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-file"></i> Lap. Kios</a>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
              {{-- <div class="card-header">
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action="/laporan/periode" target="_blank">
                  @csrf
                  Mulai
                  <input type="date" name="mulai" class="form-control">
                  Sampai
                  <input type="date" name="sampai" class="form-control">
                  Jenis Laporan
                  <select name="jenis" class="form-control" required>
                    <option value="">-pilih-</option>
                    <option value="1">Transaksi</option>
                    <option value="2">Peralihan Hak Kios</option>
                  </select>
                  <br/>
                  <button type="submit" class="btn btn-primary btn-block">Print</button>
                  
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h5>Laporan Per Pedagang</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action="/laporan/perpedagang" target="_blank">
                  @csrf
                  
                  <select name="pedagang_id" class="form-control" required>
                    @foreach ($pedagang as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                    @endforeach
                  </select>
                  <br/>
                  <button type="submit" class="btn btn-primary btn-block">Print Per Pedagang</button>
                  
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
    
</div>
@endsection

@push('js')

@endpush
