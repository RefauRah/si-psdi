@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>staff</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Staff</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Staff PSDI</h3>
            </div>
<!-- /.box-header ALTER TABLE `staff` AUTO_INCREMENT = 0;-->
            <div class="box-body">
                <!-- <a href="/staff/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a> -->
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIP</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Alamat</th>
                        <th>No Tlp</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-info">Lihat Profil</a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>NO</th>
                        <th>NIP</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Alamat</th>
                        <th>No Tlp</th>
                        <th>Option</th>
                    </tr>
                </tfoot>
                </table>
            </div>
<!-- /.box-body -->
            <div class="box-footer">
                <a href="{{url('/staff/create')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
        </div>
    </div>
</section>
@endsection