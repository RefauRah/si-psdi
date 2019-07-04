@extends('admin.template.base')
@section('content')
<<<<<<< HEAD
<div class="container mt-4">
<div class="card bg-light">
    <div class="card-header">
        <h4>Data Siswa</h4>
    </div>
    <div class="card-body">
        <table class="table table-striped table-responsive table-bordered data">
            <thead>
=======
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
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>foto</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Tindakan</th>

                </tr>
                </thead>
                <tbody>

                    <?php $nomer = 1; ?>
                    
                    @foreach ($siswa as $siswa)
                    <tr>
                        <td>{{$nomer}}</td>

                        <td>{{ $siswa->nis}}</td>
                        @if(is_null($siswa->image))
                            <td>
                                <img src="{{ asset('images/default.png') }}" style="height: 50px" class="img-fluid">
                            </td>
                        @else
                            <td><img class="img-fluid" style="height: 50px"  src="{{asset('images/file/'.$siswa->image)}}"></td>
                        @endif
                        <td>{{ $siswa->nama_siswa}}</td>
                        @if(!is_null($siswa->id_kelas))
                            <td>{{ $siswa-> kelas-> kode_kelas}} - {{ $siswa->kelas->nama}}</td>
                        @else
                            <td> - </td>
                        @endif
                        <td>{{ $siswa->tmpt_lahir}}</td>
                        <td>{{ $siswa->tgl_lahir}}</td>
                        <td>{{ $siswa->jk_siswa}}</td>
                        <td>{{ $siswa->alamat_siswa}}</td>
                        <td>
                        <a href="{{url('/siswa/hapus/'.$siswa->nis)}}" class="btn btn-sm btn-danger">Hapus</a>
                        
                        <a href="{{url('/siswa/'.$siswa->nis)}}" class="btn btn-sm btn-info">Lihat Profil</a>
                        </td>

                        <?php $nomer++; ?>
                    </tr>
                    @endforeach
                
<<<<<<< HEAD
=======
                @foreach ($siswa as $siswa)
                <tr>
                    <td>{{$nomer}}</td>

                    <td>{{ $siswa->nis}}</td>
                    @if(is_null($siswa->image))
                        <td>
                            <img src="{{ asset('images/default.png') }}" style="height: 50px" class="img-fluid">
                        </td>
                    @else
                        <td><img class="img-fluid" style="height: 50px"  src="{{asset('images/file/'.$siswa->image)}}"></td>
                    @endif
                    <td>{{ $siswa->nama_siswa}}</td>
                    @if(!is_null($siswa->id_kelas)){
                        <td>{{ $siswa-> kelas-> kode_kelas}} - {{ $siswa->kelas->nama}}</td>
                    }
                    @else{
                        <td> - </td>
                    }
                    @endif
                    <td>{{ $siswa->tmpt_lahir}}</td>
                    <td>{{ $siswa->tgl_lahir}}</td>
                    <td>{{ $siswa->jk_siswa}}</td>
                    <td>{{ $siswa->alamat_siswa}}</td>
                    <td>
                    <a href="{{url('/siswa/hapus/'.$siswa->nis)}}" class="btn btn-sm btn-danger">Hapus</a>
                    <a href="{{url('/siswa/edit/'.$siswa->nis)}}" class="btn btn-sm btn-primary">Edit</a> 
                    <a href="{{url('/siswa/'.$siswa->nis)}}" class="btn btn-sm btn-primary">Lihat Profil</a>
                    </td>

                    <?php $nomer++; ?>
                </tr>
                @endforeach
              
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>foto</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>

                    <th>Tindakan</th>
                </tr>
                </tfoot>
<<<<<<< HEAD
        </table>
    </div>
    <div class="card-footer">
        <a href="{{url('/siswa/create')}}" class="btn btn-sm btn-success pull-right">
            <i class="fa fa-plus"></i> Tambah
        </a>
    </div>
</div>
=======
                </table>
            </div>
<!-- /.box-body -->
            <div class="box-footer">
                <a href="{{url('/siswa/create')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
        </div>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
    </div>
@endsection