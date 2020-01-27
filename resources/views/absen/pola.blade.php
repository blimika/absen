@extends('layouts.default')

@section('konten')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Pola/Shift Jam Kerja </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="card-title m-0">Pola Jam Kerja </h5>
                  <div class="card-tools">
                    <button class="btn btn-sm btn-success">Tambah</button>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                 
                  <table class="table table-striped table-valign-middle">
                    <thead>
                    <tr>
                      <th>Nama Pola</th>
                      <th>Jam Datang</th>
                      <th>Jam Pulang</th>
                      <th>Aktif?</th>
                      <th>Aksi</th>
                    </tr>
                    
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                  </div>
              </div>
        </div>
        <!-- /.col-md-6 -->
        
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
  @endsection

  @section('sidebarkanan')
  <div class="p-3">
    <h5>Penarikan Log</h5>
    <p>Absen Hari ini</p>
  </div>
  @endsection