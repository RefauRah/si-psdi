@extends('admin.template.base')
@section('content')
<link rel="stylesheet" type="text/css" href="css/StyleLaporan.css">
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3>Tabel
                <small>Laporan Absensi Pengajian</small>
            </h3>
        </div>
        <div class="card-body">
            <div class="container">      
            <form class="form-horizontal">
                <div class="form-group">
                   <label class="control-label col-sm-2" for="kelas">Kelas :</label>
                   <div class="col-sm-3">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="kelas">Bulan :</label>
                    <div class="col-sm-2">
                        <select class="form-control">
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                        </select>
                    </div>
                </div>    
            </form>     
            </div>
            <!-- Tabel -->
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="table-conteiner fl-tables" data-pattern="priority-columns">
                <table class="table table-bordered table-hover table-data3 table-wrapper">
                <thead>
                <tr>
                    <th rowspan="2" align=center>NO</th>
                    <th rowspan="2" align=center>NIS</th>
                    <th rowspan="2" align=center>Nama</th>
                    <th colspan="6">Senin: </th>
                    <th colspan="6">Selasa: </th>
                    <th colspan="6">Rabu: </th>
                    <th colspan="3">Kamis: </th>
                    <th colspan="3">Jum'at: </th>
                    <th colspan="3">Sabtu: </th>
                    <th colspan="2">Minggu: </th>
                </tr>
                <tr>
                    <th align=center>K1</th>
                    <th align=center>K2</th>
                    <th align=center>K3</th>
                    <th align=center>K4</th>
                    <th align=center>K5</th>
                    <th align=center>K6</th>
                    <th align=center>K1</th>
                    <th align=center>K2</th>
                    <th align=center>K3</th>
                    <th align=center>K4</th>
                    <th align=center>K5</th>
                    <th align=center>K6</th>
                    <th align=center>K1</th>
                    <th align=center>K2</th>
                    <th align=center>K3</th>
                    <th align=center>K4</th>
                    <th align=center>K5</th>
                    <th align=center>K6</th>
                    <th align=center>K1</th>
                    <th align=center>K5</th>
                    <th align=center>K6</th>
                    <th align=center>K1</th>
                    <th align=center>K5</th>
                    <th align=center>K6</th>
                    <th align=center>K1</th>
                    <th align=center>K5</th>
                    <th align=center>K6</th>
                    <th align=center>K1</th>
                    <th align=center>K6</th>
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
                        <td></td>
                        <td></td>
                    </tr>
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
@endsection
