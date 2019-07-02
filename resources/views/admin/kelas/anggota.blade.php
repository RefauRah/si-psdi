@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
@if(Session::has('flash_message_fail'))
    <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span><em> {!! session('flash_message_fail') !!}</em></div>
@endif
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">
          @foreach ($kelas as $row)
                <h3>{{$row->kode_kelas}} - {{$row->nama}}</h3>
                    <input type="hidden" name="id_kelas" value = "{{$row->id}}">
                    <input type="hidden" name="jenis_kelas" value = "{{$row->jenis_kelas}}">
            @endforeach
      </div>
      <div class="card-body card-block">
          <form action="/kelas/anggota/tambahAnggota" method="post" class="">
          @csrf
              <table id="example1" class="table table-striped table-responsive table-bordered data">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Pilih</th>
                </tr>
                </thead>
                
                <tbody>
                <?php $nomer = 1; ?>
                <?php $getid = array(); ?>
                @foreach ($siswa as $row)
                <tr>
                <?php $getid[$nomer] = $row->nis; ?>
                    <td>{{$nomer}}</td>
                    <td>{{$row->nis}}</td>
                    <td>{{$row->nama_siswa}}</td>
                    <td><input type = "checkbox" name = "nis[]" value = "{{$getid[$nomer]}}"/></td>
                <?php $nomer++; ?>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Pilih</th>
                </tr>
                </tfoot>

                </table>
              <div class="form-actions form-group" style="margin:20px">
                  <button type="button" onclick="history.back();" class="btn btn-danger">Back</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
          </form>
      </div>
  </div>
</div>
</section>
@endsection