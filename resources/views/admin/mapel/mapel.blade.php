@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>tabel mata pelajaran</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mata Pelajaran</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Mata Pelajaran PSDI</h3>
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <?php $nomer = 1; ?>

                @foreach ($mapel as $row)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $row->kode}}</td>
                    <td>{{ $row->nama}}</td>
                    <td><a href="{{url('/mapel/hapus/'.$row->id_mapel)}}" class="btn btn-sm btn-danger">Hapus</a></td>

                    <?php $nomer++; ?>
                </tr>

                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Tindakan</th>
                </tr>
                </tfoot>
                </table>
            </div>
<!-- /.box-body -->
            <div class="box-footer">
                <a href="{{url('/mapel/create')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
        </div>
    </div>
</section>
@endsection