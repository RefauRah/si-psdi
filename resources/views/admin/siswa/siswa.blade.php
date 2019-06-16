@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>tabel siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Siswa</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Siswa PSDI</h3>
                <a href="{{url('/siswa/create')}}" class="btn btn-sm btn-success pull-right">
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
                    <th>Kelas</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>

                <?php $nomer = 1; ?>
                
                @foreach ($siswa as $row)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $row->nik}}</td>
                    <td>{{ $row->nama}}</td>
                    <td>{{ $row->tmpt_lahir}}</td>
                    <td>{{ $row->tgl_lahir}}</td>
                    <td>{{ $row->jk}}</td>
                    <td>{{ $row->alamat}}</td>
                    <td><a href="#" class="btn btn-sm btn-primary">Lihat Profil</a></td>
                    <?php $nomer++; ?>
                </tr>
                @endforeach
              
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>#</th>
                </tr>
                </tfoot>
                </table>
            </div>
<!-- /.box-body -->
        </div>
    </div>
</section>
@endsection