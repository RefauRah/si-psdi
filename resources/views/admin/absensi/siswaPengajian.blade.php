@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>Absensi Siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kelas</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Absensi Tanggal : <input type="date" class="form-control" name="gender"></h3>
                <h3 class="box-title">Kelas : <input type="text" class="form-control"></h3>
                <h3 class="box-title">Sesi : <select class="form-control">
                    <option>K1</option>
                    <option>K2</option>
                    <option>K3</option>
                    <option>K4</option>
                    <option>K5</option>
                    <option>K6</option>
                </select></h3>
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Hadir</th>
                    <th>Sakit</th>
                    <th>Alfa</th>
                    <th>Izin</th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                <tbody> 
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="radio" name="gender" value="male"></td>
                    <td><input type="radio" name="gender" value="male"></td>
                    <td><input type="radio" name="gender" value="male"></td>
                    <td><input type="radio" name="gender" value="male"></td>
                    <td><input type="text" class="form-control" name="gender"></td>
                </tr>
                </tbody>
                </table>
                <button class="btn btn-success btn-sm pull-right">Submit</button>
            </div>
<!-- /.box-body -->
        </div>
    </div>
</section>
@endsection