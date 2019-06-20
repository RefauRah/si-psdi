@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>tabel keuangan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">keuangan</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Wali Kelas PSDI</h3>
                <a href="{{url('/keuangan/create')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
<!-- /.box-header -->
<div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Pembayaran</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody>
                <?php $nomer = 1; ?>
                @foreach ($keuangan as $row)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{$row->siswa->nik }}</td>
                    <td>{{$row->siswa->nama}}</td>
                    <td>{{$row->pembayaran}}</td>
                    <td></td>
                </tr>
                <?php $nomer++; ?>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Pembayaran</th>
                    <th>Option</th>
                </tr>
                </tfoot>
                </table>
            </div>
<!-- /.box-body -->
        </div>
    </div>
</section>
@endsection