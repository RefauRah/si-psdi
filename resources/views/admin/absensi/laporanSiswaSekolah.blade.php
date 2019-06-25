@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>Laporan Absensi Siswa Sekolah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Laporan</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
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
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <td rowspan="3" align=center>NO</td>
                    <td rowspan="3" align=center>NIS</td>
                    <td rowspan="3" align=center>Nama</td>
                    <td rowspan="3" align=center>L/P</td>
                    <td colspan="3">Tgl: </td>
                    <td colspan="3">Tgl: </td>
                    <td colspan="3">Tgl: </td>
                    <td colspan="3">Tgl: </td>
                    <td colspan="3">Tgl: </td>
                    <td rowspan="3" align=center>Keterangan</td>
                </tr>
                <tr>
                    <td colspan="3" align=center>Sesi</td>
                    <td colspan="3" align=center>Sesi</td>
                    <td colspan="3" align=center>Sesi</td>
                    <td colspan="3" align=center>Sesi</td>
                    <td colspan="3" align=center>Sesi</td>
                </tr>
                <tr>
                    <td align=center>2</td>
                    <td align=center>3</td>
                    <td align=center>4</td>
                    <td align=center>2</td>
                    <td align=center>3</td>
                    <td align=center>4</td>
                    <td align=center>2</td>
                    <td align=center>3</td>
                    <td align=center>4</td>
                    <td align=center>2</td>
                    <td align=center>3</td>
                    <td align=center>4</td>
                    <td align=center>2</td>
                    <td align=center>3</td>
                    <td align=center>4</td>
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                
                </tbody>
                </table>
            </div>
<!-- /.box-body -->
        </div>
    </div>
</section>
@endsection