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
            <h1 class="m-0 text-dark">Data peralihan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <a href="/peralihan/add" class="btn btn-sm btn-primary">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nomor Transaksi</th>
                    <th>Tanggal Peralihan</th>
                    <th>Pedagang Lama</th>
                    <th>Pedagang Hak Alih</th>
                    <th>Biaya</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  @php
                  $no =1;
                  @endphp
                  <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>TRAUU{{$item->id}}</td>
                            <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
                            <td>Nama : {{$item->pedagang_lama == null ? '': $item->pedagang_lama->nama}}<br/>
                                Telp : {{$item->pedagang_lama == null ? '': $item->pedagang_lama->telp}}
                            
                            </td>
                            <td>Nama : {{$item->pedagang_baru == null ? '': $item->pedagang_baru->nama}}<br/>
                                Telp : {{$item->pedagang_baru == null ? '': $item->pedagang_baru->telp}}
                            
                            </td>
                            <td>{{number_format($item->biaya)}}</td>
                            <td>
                                <a href="/peralihan/edit/{{$item->id}}" class="btn btn-xs bg-gradient-warning"><i class="fas fa-edit"></i></a>
                                <a href="/peralihan/delete/{{$item->id}}" class="btn btn-xs bg-gradient-danger" onclick="return confirm('Yakin Menghapus Data Ini?');"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                  
                </table>
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

<script src="/lte/plugins/datatables/jquery.dataTables.js"></script>
<script src="/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endpush
