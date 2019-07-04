@extends('admin.template.base')

@section('content')
<<<<<<< HEAD
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">
            <?php foreach ($users as $key): ?>
      <h3>Profil Siswa {{$key->nama_siswa}}</h3>
      <p>{{$key->alamat_siswa}}</p>
    <?php endforeach; ?>
      </div>
      <div class="card-body card-block">
          <div class="col-md-4" style="padding-top:20px">
=======
<section class="content-header">
    <?php foreach ($users as $key): ?>
      <h1>Profil Siswa {{$key->nama_siswa}}</h1>
      <p>{{$key->alamat_siswa}}</p>
    <?php endforeach; ?>

<section class="content-header">
      <h1>
        Lihat
        <small>data siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Siswa</li>
        <li class="active">Profil</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profil Siswa PSDI</h3>
            </div>
<!-- /.box-header ALTER TABLE `siswa` AUTO_INCREMENT = 0;-->
            <div class="box-body">
                <div class="col-md-4" style="padding-top:20px">
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
                   @if(is_null($key->image))
                        <img src="{{ asset('images/default.png') }}" alt="Profile" class="img-thumbnail img-fluid" style="height: 100px">
                    @else
                        <img class="img-fluid img-thumbnail" style="height: 100px"  src="{{asset('images/file/'.$key->image)}}" alt="Profile">
                    @endif
                </div> 
<<<<<<< HEAD
                <table class="table table-bordered table-striped" style="margin: 20px 0px 20px">
=======
                <table class="table table-bordered table-striped">
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
                <thead>
                </thead>
                <tbody>

                <tr>
                    <th>NIS</th>
                    <td>{{$key->nis}}</td>
                </tr>
                
                <tr>
                    <th>Nama</th>
                    <td>{{$key->nama_siswa}}</td>
                </tr>

                <tr>
                    <th>Kelas</th>
                    <td>{{$key->kode_kelas}} - {{$key->nama}}  </td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{$key->jk_siswa}}</td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>{{$key->alamat_siswa}}</td>
                </tr>
                
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{$key->tmpt_lahir}}</td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{$key->tgl_lahir}}</td>
                </tr>

                <tr>
                    <th>Persentase Hadir</th>
                    <td>{{$hadirPersen}}%</td>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                </tfoot>
                </table>
<<<<<<< HEAD
                <div class="form-actions form-group">
                  <button type="button" onclick="history.back();" class="btn btn-danger pull-right">Kembali</button>
              </div>
      </div>
  </div>
=======
            </div>
<!-- /.box-body -->
<div class="button" style="margin-left:10px;margin-right:10px;padding-bottom:10px;">

            <a href="{{url('/siswa')}}" class="btn btn-primary">Kembali</a>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
</div>
</section>
@endsection