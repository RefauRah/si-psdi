@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>tabel kelas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kelas</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Absensi Siswa PSDI</h3>
                <a href="{{url('/kelas/create')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kegiatan</th>
                    <th>Pertemuan Ke</th>
                    <th>Kehadiran</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($data as $row)
                <tr>
                    <td>{{ $row->id_absen}}</td>
                    <td>{{ $row->nm}}</td>
                    <td>{{ $row->mrd}}</td>
                    <td>{{ $row->jns_kegiatan}}</td>
                    <td>{{ $row->pertemuanke}}</td>
                    <td>{{ $row->status_hadir}}</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kegiatan</th>
                    <th>Pertemuan Ke</th>
                    <th>Kehadiran</th>
                </tr>
                </tfoot>
                </table>
            </div>
<!-- /.box-body -->
        </div>
    </div>
</section>
@endsection