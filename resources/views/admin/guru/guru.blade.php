@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
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
                <a href="{{url('/guru/create')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
<!-- /.box-header ALTER TABLE `guru` AUTO_INCREMENT = 0;-->
            <div class="box-body">
                <a href="/guru/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>No Tlp</th>
                    <th>#</th>
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
                        <td><img class="img-fluid" style="height: 50px"  src="{{asset('storage/files/guru/'.$row->image)}}"></td>
                    @endif
                    <td>{{ $row->nama}}</td>
                    <td>{{ $row->alamat}}</td>
                    <td>{{ $row->tempat_lahir}}</td>
                    <td>{{ $row->tgl_lahir}}</td>
                    <td>{{ $row->no_telp}}</td>
                    <td>
                        <a href="{{url('/guru/hapus')}}" class="btn btn-sm btn-danger">Hapus</a>
                        <a href="{{route('editGuru', $row->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{route('showGuru', $row->id)}}" class="btn btn-sm btn-primary">Lihat Profil</a>
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