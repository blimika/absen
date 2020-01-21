@extends('layouts.default')

@section('konten')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Presensi Pegawai BPS Provinsi NTB</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
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
                  <h5 class="m-0">Presensi Hari {{Tanggal::HariPanjang(\Carbon\Carbon::now())}}</h5>
                </div>
                <div class="card-body">
                  <h6 class="card-title">Special title treatment</h6>
    
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  
                </div>
              </div>
        </div>
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">Belum presensi</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title">Special title treatment</h6>

              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              
            </div>
          </div>
        </div>
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