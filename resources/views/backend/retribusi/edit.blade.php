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
            <h1 class="m-0 text-dark">Edit</h1>
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
                <form class="form-horizontal" method="POST" action="{{route('editretribusi',['id' => $data->id])}}">
                    @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal" value="{{$data->tanggal_bayar}}">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">pedagang</label>
                      <div class="col-sm-10">
                        <select name="pedagang_id" class="form-control" required>
                          <option value="">-pilih-</option>
                          @foreach ($pedagang as $item)
                              <option value="{{$item->id}}" {{$data->pedagang_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
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
                              <option value="{{$item->id}}" {{$data->jenis_id == $item->id ? 'selected':''}}>{{$item->nama}}, tarif : {{$item->tarif}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Untuk Pembayaran Bulan</label>
                      <div class="col-sm-2">
                        <select name="bulan" class="form-control" required>
                          <option value="">-pilih-</option>
                          <option value="1" {{$data->bulan == "1" ? 'selected':''}}>januari</option>
                          <option value="2" {{$data->bulan == "2" ? 'selected':''}}>februari</option>
                          <option value="3" {{$data->bulan == "3" ? 'selected':''}}>maret</option>
                          <option value="4" {{$data->bulan == "4" ? 'selected':''}}>april</option>
                          <option value="5" {{$data->bulan == "5" ? 'selected':''}}>mei</option>
                          <option value="6" {{$data->bulan == "6" ? 'selected':''}}>juni</option>
                          <option value="7" {{$data->bulan == "7" ? 'selected':''}}>juli</option>
                          <option value="8" {{$data->bulan == "8" ? 'selected':''}}>agustus</option>
                          <option value="9" {{$data->bulan == "9" ? 'selected':''}}>september</option>
                          <option value="10" {{$data->bulan == "10" ? 'selected':''}}>oktober</option>
                          <option value="11" {{$data->bulan == "11" ? 'selected':''}}>november</option>
                          <option value="12" {{$data->bulan == "12" ? 'selected':''}}>desember</option>
                          
                        </select>
                      </div>
                      <div class="col-sm-2">
                        <select name="tahun" class="form-control" required>
                          <option value="">-pilih-</option>
                          <option value="2024" {{$data->tahun == "2024" ? 'selected':''}}>2024</option>
                        </select>
                      </div>
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info"><i class="icon fas fa-check"></i>
                        Update</button>
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
