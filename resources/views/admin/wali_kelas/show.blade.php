@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<section class="content-header">
      <h1>
        Lihat
        <small>data wali kelas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Wali Kelas</li>
        <li class="active">Profil</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profil Wali Kelas PSDI</h3>
            </div>
<!-- /.box-header ALTER TABLE `wali_kelas` AUTO_INCREMENT = 0;-->
            <div class="box-body">
                <table class="table table-bordered table-striped">
                <thead>
                </thead>
                <tbody>

                <tr>
                    <th>NIP</th>
                    <td>#</td>
                </tr>
                
                <tr>
                <th>Nama</th>
                <td>#</td>
                </tr>

                <tr>
                <th>Alamat</th>
                <td>#</td>
                </tr>
                
                <tr>
                <th>Tempat Lahir</th>
                <td>#</td>
                </tr>

                <tr>
                <th>Tanggal Lahir</th>
                <td>#</td>
                </tr>

                <tr>
                    <th>No Tlp</th>
                    <td>#</td>   
                </tr>

                <tr>
                    <th>Tanggal Masuk PSDI</th>
                    <td>#</td>   
                </tr>
                <tr>
                    <th>Pendidikan Terakhir</th>
                    <td>#</td>   
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td>#</td>   
                </tr>
                <tr>
                    <th>Boarding/PP</th>
                    <td>#</td>   
                </tr>
                <tr>
                    <th>Status Pernikahan</th>
                    <td>#</td>   
                </tr>
                <tr>
                    <th>Jumlah Keluarga Yang Dibawa</th>
                    <td>#</td>   
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
            <a href="#" class="btn btn-primary">Kembali</a>
</div>
        </div>
    </div>
</section>
@endsection