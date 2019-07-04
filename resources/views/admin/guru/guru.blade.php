@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<<<<<<< HEAD
<div class="container mt-4">
<div class="card bg-light">
    <div class="card-header">
        <h4>Data Guru</h4>
    </div>
    <div class="card-body">
        <table class="table table-striped table-responsive table-bordered data">
            <thead>
=======
<section class="content-header">
      <h1>
        Tabel
        <small>tabel guru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Guru</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Guru PSDI</h3>
            </div>
<!-- /.box-header ALTER TABLE `guru` AUTO_INCREMENT = 0;-->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>No Tlp</th>
                    <th>Tindakan</th>
                </tr>
                </thead>
                <tbody>

                <?php $nomer = 1; ?>

                @foreach ($guru as $row)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $row->nip}}</td>
                    @if(is_null($row->image))
                        <td>
                            <img src="{{ asset('images/default.png') }}" style="height: 50px" class="img-fluid">
                        </td>
                    @else
                        <td><img class="img-fluid" style="height: 50px"  src="{{asset('images/file/'.$row->image)}}"></td>
                    @endif
                    <td>{{ $row->nama}}</td>
                    <td>{{ $row->alamat}}</td>
                    <td>{{ $row->tempat_lahir}}</td>
                    <td>{{ $row->tgl_lahir}}</td>
                    <td>{{ $row->no_telp}}</td>
<<<<<<< HEAD
                    <td class="text-center">
=======
                    <td>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
                        <a href="{{url('/guru/hapus/'.$row->nip)}}" class="btn btn-sm btn-danger">Hapus</a>
                        <a href="{{route('editGuru', $row->nip)}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{route('showGuru', $row->nip)}}" class="btn btn-sm btn-info">Lihat Profil</a>
                    </td>
                    <?php $nomer++; ?>
                </tr>

                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>No Tlp</th>
                    <th>Tindakan</th>
                </tr>
                </tfoot>
<<<<<<< HEAD
        </table>
    </div>
    <div class="card-footer">
        <a href="{{url('/guru/create')}}" class="btn btn-sm btn-success pull-right">
            <i class="fa fa-plus"></i> Tambah
        </a>
        <a href="/guru/cetak_pdf" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> CETAK PDF</a>
    </div>
</div>
=======
                </table>
            </div>
<!-- /.box-body -->
            <div class="box-footer">
                <a href="{{url('/guru/create')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a>
                <a href="/guru/cetak_pdf" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> CETAK PDF</a>
            </div>
        </div>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
    </div>
@endsection