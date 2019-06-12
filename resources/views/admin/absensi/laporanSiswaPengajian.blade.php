@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>Laporan Absensi Siswa Pengajian</small>
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
                <h3 class="box-title">Kelas : <input type="text" class="form-control"></h3>
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <td rowspan="2" align=center>NO</td>
                    <td rowspan="2" align=center>NIS</td>
                    <td rowspan="2" align=center>Nama</td>
                    <td colspan="6">Senin: </td>
                    <td colspan="6">Selasa: </td>
                    <td colspan="6">Rabu: </td>
                    <td colspan="3">Kamis: </td>
                    <td colspan="3">Jum'at: </td>
                    <td colspan="3">Sabtu: </td>
                </tr>
                <tr>
                    <td align=center>K1</td>
                    <td align=center>K2</td>
                    <td align=center>K3</td>
                    <td align=center>K4</td>
                    <td align=center>K5</td>
                    <td align=center>K6</td>
                    <td align=center>K1</td>
                    <td align=center>K2</td>
                    <td align=center>K3</td>
                    <td align=center>K4</td>
                    <td align=center>K5</td>
                    <td align=center>K6</td>
                    <td align=center>K1</td>
                    <td align=center>K2</td>
                    <td align=center>K3</td>
                    <td align=center>K4</td>
                    <td align=center>K5</td>
                    <td align=center>K6</td>
                    <td align=center>K1</td>
                    <td align=center>K5</td>
                    <td align=center>K6</td>
                    <td align=center>K1</td>
                    <td align=center>K5</td>
                    <td align=center>K6</td>
                    <td align=center>K1</td>
                    <td align=center>K5</td>
                    <td align=center>K6</td>
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