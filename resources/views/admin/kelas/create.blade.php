@extends('admin.template.base')
@section('content')
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">Form Kelas</div>
      <div class="card-body card-block">
          <form action="/kelas/create" method="post" class="">
          @csrf
              <div class="form-group">
                  <div class="input-group">
                    <label for="inputNIP" class="col-sm-3">Kode Kelas</label>
                    <input name="kode_kelas" type="text" class="form-control" id="inputNIK" required>
                      <div class="input-group-addon">
                          <i class="fa fa-archive"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputNama" class="col-sm-3">Nama Kelas</label>
                      <input name="nama" type="text" class="form-control" id="inputNama" required>
                      <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputJenisKelas" class="col-sm-3">Jenis Kelas</label>
                      <div class="col-sm-10">
                      <input name="jenis_kelas" type="radio" id="jenis_kelas" value="Reguler" checked>Reguler<br>
                      <input name="jenis_kelas" type="radio" id="jenis_kelas" value="Pramubaligh">Pra Mubaligh<br>
                      <input name="jenis_kelas" type="radio" id="jenis_kelas" value="Pascamubaligh">Pasca Mubaligh<br>
                      <input name="jenis_kelas" type="radio" id="jenis_kelas" value="Bimbel">Bimbel<br>
                      <input name="jenis_kelas" type="radio" id="jenis_kelas" value="Pesantren">Pesantren
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