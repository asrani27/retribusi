<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="padding-left: 20px; padding-right:20px">
  
  <table class="tgj"  width='100%'>
    <tr>
      <td width=100><img src="/logo.png" width="70px"></td>
      <td align=center class="judul"><b><font size="5">
        PASAR BEBAS BANJIR<br />DINAS PERDAGANGAN DAN PERINDUSTRIAN KABUPATEN BARITO UTARA</font></b><br/>
        <b>JL Yetro Sinseng No 69, Muara Teweh Kalimantan Tengah 73812<br></b>
      </td>
      <td width=100></td>
    </tr>
  </table>
  
<div class="wrapper">
  <!-- Main content -->
  <section>
    <!-- info row -->
    <br/>
    <div class="row invoice-info">
      <div class="col-sm-12 invoice-col text-center">
            <h4><strong>LAPORAN PEGAWAI</strong></h4>
            
        </address>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-sm table-bordered">
          <thead>
          <tr style="background-color: silver">
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jkel</th>
            <th>Telp</th>
            <th>jabatan</th>
          </tr>
          </thead>
          @php
          $no =1;
          @endphp
          <tbody>
              @foreach ($data as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->nip}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->jkel}}</td>
                    <td>{{$item->telp}}</td>
                    <td>{{$item->jabatan}}</td>
                </tr>
              @endforeach
          </tbody>
        </table>
        <table width="100%">
          <tr>
            <td width="50%" style="text-align: center"><br/>
            <br/><br/><br/><br/>
            
            </td>
            <td width="50%" style="text-align: center">Muara Teweh, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br/>
              Mengetahui,
              <br/><br/><br/><br/>
              (.................)
            </td>
          </tr>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
