@extends('layouts.default')

@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
@endsection
@section('js')
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
      $('#rekap').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ],
        "displayLength": 31,
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
          <h1>Rekap Absen</h1>
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
        <h3 class="card-title">Rekap Absen</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body col-sm-12">
          
            @include('rekap.filter')
         
          <div class="table-responsive">
            <table id="rekap" class="tabletable-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>NIP BPS</th>
                  <th>Nama</th>
                  <th>hari</th>
                  <th>Tanggal</th>
                  <th>Jam Masuk</th>
                  <th>Jam Keluar</th>
                  <th>Lembur Masuk</th>
                  <th>Lembur Keluar</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($dataAbsen as $item)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->tgl_absen_id}}</td>
                            <td>{{$item->tgl_nipbps}}</td>
                            <td>{{$item->tgl_nama}}</td>
                            <td>
                                {{Carbon\Carbon::parse($item->tgl_lengkap)->isoFormat('dddd')}}
                            </td>
                            <td>{{Carbon\Carbon::parse($item->tgl_lengkap)->isoFormat('D MMMM Y')}}</td>
                            <td>@isset($item->masuk_waktu)
                              {{Carbon\Carbon::parse($item->masuk_waktu)->format('H:i')}}
                            @endisset
                              </td>
                            <td>
                              @isset($item->plg_waktu)
                              {{Carbon\Carbon::parse($item->plg_waktu)->format('H:i')}}
                              @endisset
                            </td>
                            <td>@isset($item->lbrmsk_waktu)
                              {{Carbon\Carbon::parse($item->lbrmsk_waktu)->format('H:i')}}
                              @endisset
                            </td>
                           
                            <td>@isset($item->lbrplg_waktu)
                              {{Carbon\Carbon::parse($item->lbrplg_waktu)->format('H:i')}}
                              @endisset</td>
                            
                          </tr>
                      @endforeach
                </tbody>
            </table>
          </div>
        
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection