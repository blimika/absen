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
          
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0"> 
                    <span><a href="{{route('absen.presensi',$tgl_prev)}}" class="btn btn-primary"><i class="fas fa-angle-left"></i></a></span> 
                    Hari {{Tanggal::HariPanjang(\Carbon\Carbon::parse($hari_tanggal))}} 
                    <span><a href="{{route('absen.presensi',$tgl_next)}}" class="btn btn-primary"><i class="fas fa-angle-right"></i></a><span>

                    </h5>
                </div>
                <div class="card-body table-responsive p-0">
                 
                  <table class="table table-striped table-valign-middle">
                    <thead>
                    <tr>
                      <th rowspan="2">Nama</th>
                      <th colspan="2">Datang</th>
                      <th colspan="2">Pulang</th>
                      <th colspan="2">Lembur Masuk</th>
                      <th colspan="2">Lembur Pulang</th>
                    </tr>
                    <tr>
                      <th>Waktu</th>
                      <th>Ket</th>
                      <th>Waktu</th>
                      <th>Ket</th>
                      <th>Waktu</th>
                      <th>Ket</th>
                      <th>Waktu</th>
                      <th>Ket</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($dataAbsen as $item)
                          <tr>
                            <td><img src="{{$item->urlfoto}}" height="40px" width="40px" class="img img-responsive full-width img-circle mr-2">
                              {{$item->nama}}</td>
                            <td>@isset($item->masuk_waktu)
                              {{Carbon\Carbon::parse($item->masuk_waktu)->format('H:i')}}
                            @endisset
                              </td>
                            <td>
                              @empty($item->masuk_waktu)
                                  <small class="badge badge-warning">absen</small>
                              @endempty
                              @isset($item->masuk_waktu)
                                @if (Carbon\Carbon::parse('07:30')->diffInMinutes(Carbon\Carbon::parse($item->masuk_waktu),false)>0)
                                <small class="badge badge-danger">telat</small>
                                @else 
                                  <small class="badge badge-success"><i class="fas fa-thumbs-up"></i></small>
                                @endif
                              @endisset
                            </td>
                            <td>
                              @isset($item->plg_waktu)
                              {{Carbon\Carbon::parse($item->plg_waktu)->format('H:i')}}
                              @endisset
                            </td>
                            <td>
                              @empty($item->plg_waktu)
                                  <small class="badge badge-warning">absen</small>
                              @endempty
                              @isset($item->plg_waktu)
                                @if (Carbon\Carbon::parse('17:00')->diffInMinutes(Carbon\Carbon::parse($item->plg_waktu),false)<-60)
                                <small class="badge badge-danger">cpt plg</small>
                                @else 
                                  <small class="badge badge-success"><i class="fas fa-thumbs-up"></i></small>
                                @endif
                              @endisset
                            </td>
                            <td>@isset($item->lbrmsk_waktu)
                              {{Carbon\Carbon::parse($item->lbrmsk_waktu)->format('H:i')}}
                              @endisset
                            </td>
                            <td>
                              @empty($item->lbrmsk_waktu)
                                  <small class="badge badge-warning">absen</small>
                              @endempty
                              @isset($item->lbrmsk_waktu)
                              <small class="badge badge-primary">lembur</small>
                              @endisset
                            </td>
                            <td>@isset($item->lbrplg_waktu)
                              {{Carbon\Carbon::parse($item->lbrplg_waktu)->format('H:i')}}
                              @endisset</td>
                            <td>
                              @empty($item->lbrplg_waktu)
                              <small class="badge badge-warning">absen</small>
                              @endempty
                              @isset($item->lbrplg_waktu)
                              <small class="badge badge-primary">lembur</small>
                              @endisset
                            </td>
                          </tr>
                      @endforeach
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