@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
@if(Session::has('flash_message_fail'))
    <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span><em> {!! session('flash_message_fail') !!}</em></div>
@endif
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
 <form class="" method="get" action="{{route('absenSiswa', $kelas)}}">
    @csrf
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
                        <select name="id_kelas" id="inputKelas" class="form-control">
                        @foreach ($kelas as $row)
                            <option name="id_kelas" value="{{$row->id}}" required>{{$row->kode_kelas}} - {{$row->nama}}</option>
                        @endforeach
                    </select>
                    </div>

            <div class="box-footer">
                <td><button type="submit"class="btn btn-success btn-sm pull-right">Submit</button></td>
            </div>
<!-- /.box-body -->
        </div>
    </div>
</form>
</section>
@endsection