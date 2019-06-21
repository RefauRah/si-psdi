@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<section class="content-header">
      <h3 class="col-md-12">
        Lihat
        <small>data guru</small>
      </h3>
      <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-home"></i> Home</a></li>
        <li class="">Guru</li>
        <li class="active">Profil</li>
      </ol>
</section>
<section class="content">
    <div class="col-md-12 offset-md-0.1">
        <div class="card">
            <div class="card-header">
                <h3>Profil Guru PSDI</h3>
            </div>
<!-- /.box-header ALTER TABLE `guru` AUTO_INCREMENT = 0;-->
            <div class="card-body">
                <table class="table table-bordered table-striped">
                <thead>
                </thead>
                <tbody>

                <tr>
                    <th>NIP</th>
                    <td>{{$guru->nip}}</td>
                </tr>
                
                <tr>
                <th>Nama</th>
                <td>{{$guru->nama}}</td>
                </tr>

                <tr>
                <th>Alamat</th>
                <td>{{$guru->alamat}}</td>
                </tr>
                
                <tr>
                <th>Tempat Lahir</th>
                <td>{{$guru->tempat_lahir}}</td>
                </tr>

                <tr>
                <th>Tanggal Lahir</th>
                <td>{{$guru->tgl_lahir}}</td>
                </tr>

                <tr>
                    <th>No Tlp</th>
                    <td>{{$guru->no_telp}}</td>   
                </tr>

                <tr>
                    <th>Tanggal Masuk PSDI</th>
                    <td>{{$guru->tgl_masuk}}</td>   
                </tr>
                <tr>
                    <th>Pendidikan Terakhir</th>
                    <td>{{$guru->pend_terakhir}}</td>   
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td>{{$guru->jabatan}}</td>   
                </tr>
                <tr>
                    <th>Boarding/PP</th>
                    <td>{{$guru->boarding}}</td>   
                </tr>
                <tr>
                    <th>Status Pernikahan</th>
                    <td>{{$guru->status_nikah}}</td>   
                </tr>
                <tr>
                    <th>Jumlah Keluarga Yang Dibawa</th>
                    <td>{{$guru->jumlah_kel}}</td>   
                </tr>

                </tbody>
                <tfoot>
                <tr>
                </tfoot>
                </table>
            </div>
<!-- /.box-body -->
<div class="button" style="margin-left:10px;margin-right:10px;padding-bottom:10px;">
            <a href="#" class="btn btn-success pull-right">Edit</a>
            <a href="{{url('/guru')}}" class="btn btn-primary">Kembali</a>
</div>
        </div>
    </div>
</section>
@endsection