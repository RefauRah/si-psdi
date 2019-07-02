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
      <div class="card-header">Tambah Wali Kelas</div>
      <div class="card-body card-block">
          <form action="/tambahwalikelas" method="post" class="">
          @csrf
              <div class="form-group">
                  <div class="input-group">
                    <label for="inputNIP" class="col-sm-3">Guru</label>
                    <select name="nip" id="guru" class="form-control">
                    @foreach ($guru as $row)
                        <option name="nip" value="{{$row->nip}}" required>{{$row->nip}} - {{$row->nama}}</option>
                    @endforeach
                    </select>
                      <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputNama" class="col-sm-3">Kelas</label>
                      <select name="id_kelas" id="walikelas" class="form-control">
                    <option name="id_kelas" value="" required> </option>
                    @foreach ($kelas as $row)
                        <option name="id_kelas" value="{{$row->nama}}" required>{{$row->kode_kelas}} - {{$row->nama}}</option>
                    @endforeach
                    </select>
                      <div class="input-group-addon">
                          <i class="fa fa-building"></i>
                      </div>
                  </div>
              </div>
              <div class="form-actions form-group">
                  <button type="button" onclick="history.back();" class="btn btn-danger">Back</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
          </form>
      </div>
  </div>
</div>
</section>
@endsection