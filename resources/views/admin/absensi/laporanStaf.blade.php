@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tabel
        <small>Absensi Staf</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Absensi</li>
      </ol>
</section>
<section class="content">
    <form class="" method="post" action="/absenstaf">
    @csrf
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="col col-sm-1">
                        <label>Tanggal</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" style="width:17%" name="tgl_absen" required>
                    </div>
                <!-- /.input group -->
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Status Absen</th>
                    <th>Tangal/date</th>
                    <th>Jenis Aktifitas</th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                <?php $nomer = 1; ?>
                @foreach ($users as $staf)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $staf->nip_staf}}</td>
                    <td>{{ $staf->nama_staf}}</td>
                    <td>{{ $staf->absen_staf}}</td>
                    <td>{{ $staf->tgl_absen_staf}}</td>
                    <td></td>
                    <td>{{ $staf->keterangan_staf}}</td>
            
                <?php $nomer++; ?>
                </tr>
                @endforeach
                </tfoot>

                </table>
            </div>
<!-- /.box-body -->
            <div class="box-footer">
                <a href="#" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> CETAK PDF</a>
            </div>
        </div>
    </div>
</form>
</section>
@endsection