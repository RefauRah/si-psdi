@extends('admin.template.base')
@section('content')
<link rel="stylesheet" type="text/css" href="css/StyleLaporan.css">
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3>Tabel
                <small>Laporan Absensi Sekolah</small>
            </h3>
        </div>
        <div class="card-body">
            <div class="container">      
            <form class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="kelas" class=" form-control-label">Kelas</label>
                    </div>
                    <div class="col col-sm-3">
                        <input type="text" id="input-normal" name="input-normal" class="form-control">
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
                    <th rowspan="3" class="text-center">NO</th>
                    <th rowspan="3" class="text-center">NIS</th>
                    <th rowspan="3" class="text-center">Nama</th>
                    <th rowspan="3" class="text-center">Jenis Kelamin</th>
                    <th colspan="3" class="text-left">Tgl: </th>
                    <th colspan="3" class="text-left">Tgl: </th>
                    <th colspan="3" class="text-left">Tgl: </th>
                    <th colspan="3" class="text-left">Tgl: </th>
                    <th colspan="3" class="text-left">Tgl: </th>
                    <th rowspan="3" class="text-center">Keterangan</th>
                </tr>
                <tr>
                    <th colspan="3" class="text-center">Sesi</th>
                    <th colspan="3" class="text-center">Sesi</th>
                    <th colspan="3" class="text-center">Sesi</th>
                    <th colspan="3" class="text-center">Sesi</th>
                    <th colspan="3" class="text-center">Sesi</th>
                </tr>
                <tr>
                    <th class="text-center">2</th>
                    <th class="text-center">3</th>
                    <th class="text-center">4</th>
                    <th class="text-center">2</th>
                    <th class="text-center">3</th>
                    <th class="text-center">4</th>
                    <th class="text-center">2</th>
                    <th class="text-center">3</th>
                    <th class="text-center">4</th>
                    <th class="text-center">2</th>
                    <th class="text-center">3</th>
                    <th class="text-center">4</th>
                    <th class="text-center">2</th>
                    <th class="text-center">3</th>
                    <th class="text-center">4</th>
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
    </div>
  </div>
</div>
</div>
</div>
</section>
@endsection
