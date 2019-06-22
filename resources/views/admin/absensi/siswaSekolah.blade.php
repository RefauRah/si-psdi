@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>Absensi Siswa Sekolah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Absensi</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <form class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="tanggal" class="form-control-label">Tanggal</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" style="width:17%" name="tgl_absen" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="kelas" class=" form-control-label">Kelas</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-building"></i>
                        </div>
                        <input type="text" id="input-normal" style="width:17%" name="input-normal" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="sesi" class=" form-control-label">Sesi</label>
                    </div>
                    <div class="input-group">
                        <select class="form-control">
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>      
            </form>
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
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
                    <td></td>
                    <td><input type="radio" name="gender" value="male"></td>
                    <td><input type="radio" name="gender" value="male"></td>
                    <td><input type="radio" name="gender" value="male"></td>
                    <td><input type="radio" name="gender" value="male"></td>
                    <td><input type="text" class="form-control" name="gender"></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Hadir</th>
                    <th>Sakit</th>
                    <th>Alfa</th>
                    <th>Izin</th>
                    <th>Keterangan</th>
                </tr>
                </tfoot>
                </table>
            </div>
<!-- /.box-body -->
            <div class="box-footer">
                <button class="btn btn-success btn-sm pull-right">Submit</button>
            </div>
        </div>
    </div>
</section>
@endsection