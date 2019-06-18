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

                    <th>Tindakan</th>

                    <th>#</th>

                </tr>
                </thead>
                <tbody>

                <?php $nomer = 1; ?>
                
                @foreach ($siswa as $siswa)
                <tr>
                    <td>{{$nomer}}</td>

                    <td><a href="{{url('/siswa/'.$siswa->nik)}}">{{ $siswa->nik}}</a></td>
                    <td>{{ $siswa->nama}}</a></td>
                    <td>{{ $siswa->kelas}}</td>
                    <td>{{ $siswa->tmpt_lahir}}</td>
                    <td>{{ $siswa->tgl_lahir}}</td>
                    <td>{{ $siswa->jk}}</td>
                    <td>{{ $siswa->alamat}}</td>
                    <td>
                        <a href="{{url('/siswa/hapus')}}" class="btn btn-sm btn-danger">Hapus</a>
                        <a href="{{url('/siswa/edit')}}" class="btn btn-sm btn-primary">Edit</a> 

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

                    <th>Tindakan</th>

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