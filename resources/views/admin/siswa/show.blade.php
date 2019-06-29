@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif

<section class="content mt-4">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profil Siswa PSDI</h3>
            </div>
<!-- /.box-header ALTER TABLE `siswa` AUTO_INCREMENT = 0;-->
            <div class="box-body">
                <table class="table table-bordered table-striped">
                <thead>
                </thead>
                <tbody>

                <tr>
                    <th>NIS</th>
                    <td>#</td>
                </tr>
                
                <tr>
                    <th>Nama</th>
                    <td>#</td>
                </tr>

                <tr>
                    <th>Kelas</th>
                    <td>#</td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
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