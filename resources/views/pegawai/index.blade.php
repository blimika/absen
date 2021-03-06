@extends('layouts.default')

@section('css')
    <!-- DataTables -->
  <!--<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
@endsection
@section('js')
    <!-- DataTables -->
<!--<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>-->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable();
      $('#pegawai').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
    });
  </script>
@endsection
@section('konten')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Pegawai</h1>
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
        <h3 class="card-title">Data Pegawai Terkini (sesuai Community BPS)</h3>

        <div class="card-tools"> 
           <!-- <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#TambahModal"><i class="fa fa-plus-circle"></i> TAMBAH MITRA</button>-->
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          
        </div>
      </div>
      <div class="card-body">
        <table id="pegawai" class="table table-bordered table-responsive table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>&nbsp;</th>
              <th>Nama</th>
              <th>Absen ID</th>
              <th>NIP</th>
              <th>JK</th>
              <th>Unitkerja</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                @if ($dataPegawai->isEmpty())
                    <td colspan="7" class="text-center"><b>Data pegawai tidak tersedia</b></td>
                @else
                    @foreach ($dataPegawai as $item )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <img class="img-circle" src="{{$item->urlfoto}}" alt="User profile picture" height="100px" width="100px">
                            
                            </td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->absen_id}}</td>
                            <td>{{$item->nipbps}}-{{$item->nipbaru}}</td>
                            <td>
                                @if ($item->jk == 1)
                                    Laki-laki
                                @else
                                    Perempuan
                                @endif
                            </td>
                            <td>{{$item->jabatan}} {{$item->satuankerja}}</td>
                            <td><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#EditModal"><i class="fa fa-pencil-alt"></i> EDIT</button></td>
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
  @include('pegawai.modal')
@endsection