@extends('admin.template.base')
@section('content')
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
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>NO Tlp</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                    Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td>Tanggal Lahir</td>
                    <td>NO Tlp</td>
                    <td>Option</td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                    Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                    <td>Tanggal Lahir</td>
                    <td>NO Tlp</td>
                    <td>Option</td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                    Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td><td>Tanggal Lahir</td>
                    <td>NO Tlp</td>
                    <td>Option</td>

                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <th>Tanggal Lahir</th>
                    <th>NO Tlp</th>
                    <th>Option</th>
                </tr>
                </tfoot>
                </table>
            </div>
<!-- /.box-body -->
        </div>
    </div>
</section>
@endsection