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
                <h3 class="box-title">Data Kelas PSDI</h3>
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
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Wali Kelas</th>
                    <th>NO Ruangan</th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Wali Kelas</th>
                    <th>NO Ruangan</th>
                </tr>
                </tfoot>
                </table>
            </div>
<!-- /.box-body -->
        </div>
    </div>
</section>
@endsection