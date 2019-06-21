@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
@if(Session::has('flash_message_fail'))
    <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span><em> {!! session('flash_message_fail') !!}</em></div>
@endif
<section class="content-header">
      <h2 class="col-md-12">Tabel
        <small>Absensi Guru</small>
      </h2>
      <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fas fa-tachometer-alt"></i> Home</a></li>
        <li class="active">Absensi</li>
      </ol>
</section>
<section class="content">
    <form class="" method="post" action="/absenguru">
        @csrf
    <div class="card">
        <div class="card-header">
            <h3>Data Kelas PSDI</h3>
        </div>
        <div class="card-body">
            <div class="container">         
        <!-- Tabel -->
        <div class="col-lg-12">
            <div class="row form-group">
                <div class="col col-sm-1">
                        <label>Tanggal</label>
                    </div>
                    <div class="col col-sm-5">
                        <input type="date" class="form-control" style="width:50%" name="tgl_absen" required>
                    </div>
                <div class="input-group col-md-4 ml-auto">
                    <div class="input-group-btn">
                        <button class="btn btn-secondary">
                            <i class="fa fa-search"></i> Search
                        </button>
                    </div>
                    <input type="text" id="input1-group2" name="input1-group2" placeholder="Cari" class="form-control">
                </div>
            <div class="table-responsive fl-table">
                <table id="example1" class="table table-borderless table-data3 table-wrapper">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th class="text-center">Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $nomer = 1; ?>
                    <?php $getid = array(); ?>
                    @foreach ($guru as $row)
                    <tr>
                    <?php $getid[$nomer] = $row->id; ?>
                        <td>{{$nomer}}</td>
                        <td>{{$row->nip}}</td>
                        <td>{{$row->nama}}</td>
                        <td class="text-center"><input type = "checkbox" name = "id_guru[]" value = "{{$getid[$nomer]}}"/></td>
                    <?php $nomer++; ?>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                    <br>
                    <table class="table table-borderless table-data3 table-wrapper">
                        <tr>
                            <th>Hadir</th>
                            <th>Sakit</th>
                            <th>Alfa</th>
                            <th>Izin</th>
                            <th>Keterangan</th>
                        </tr>
                        <tr>
                            <td><input type="radio" name="absen" value="hadir" required></td>
                            <td><input type="radio" name="absen" value="sakit"></td>
                            <td><input type="radio" name="absen" value="alfa"></td>
                            <td><input type="radio" name="absen" value="izin"></td>
                            <td><input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Keterangan"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <button type="submit"class="btn btn-success btn-sm pull-right">Submit</button>
            </div>
        </div>
    </div>
</form>
</section>
@endsection