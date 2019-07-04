@extends('admin.template.base')
@section('content')
<<<<<<< HEAD
<div class="container mt-4">
<div class="card bg-light">
    <div class="card-header">
        <h4>Data Guru</h4>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered data">
            <thead>
=======
<section class="content-header">
      <h1>
        Tabel
        <small>tabel admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Admin PSDI</h3>
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Nama Kelas</th>
                </tr>
                </thead>
                <tbody>
                <?php $nomer = 1; ?>

                @foreach ($guru as $row)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $row->nip}}</td>
                    <td>{{ $row->nama}}</td>
                    <td>{{ $row->id_kelas}}</td>
                   
                    <?php $nomer++; ?>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Nama Kelas</th>
                </tr>
                </tfoot>
<<<<<<< HEAD
        </table>
    </div>
    <div class="card-footer">
        <a href="{{url('/walikelas/tambah')}}" class="btn btn-sm btn-success pull-right">
            <i class="fa fa-plus"></i> Tambah
        </a>
        <a href="/walikelas/cetak_pdf" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> CETAK PDF</a>
    </div>
</div>
=======
                </table>
            </div>
<!-- /.box-body -->
            <div class="box-footer">
                <a href="{{url('/walikelas/tambah')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a>
                <a href="/walikelas/cetak_pdf" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> CETAK PDF</a>
            </div>
        </div>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
    </div>
@endsection