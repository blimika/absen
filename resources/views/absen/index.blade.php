@extends('layouts.default')

@section('css')
    <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection
@section('js')
    <!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
    $(function () {
      $("#absen").DataTable();
      $('#pegawai').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
@endsection
@section('konten')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Log Absen</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Log</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">
        <table id="absen" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>ID</th>
              <th>Nama</th>
              <th>Tanggal</th>
              <th>Waktu</th>
              <th>Kode</th>
            </tr>
            </thead>
            <tbody>
                @if ($dataAbsen->isEmpty())
                    <td colspan="6" class="text-center"><b>Data absen tidak tersedia</b></td>
                @else
                    @foreach ($dataAbsen as $item )
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->absen_id}}</td>
                        <td>{{$item->absen_nama}}</td>
                        <td>{{$item->absen_tgl}}</td>
                        <td>{{$item->absen_waktu}}</td>
                        <td>{{$item->AbsenKode->kode_nama}}</td>
                      </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection