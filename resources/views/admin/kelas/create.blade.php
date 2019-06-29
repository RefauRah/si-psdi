@extends('admin.template.base')
@section('content')
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">Form Kelas</div>
      <div class="card-body card-block">
          <form action="/kelas/create" enctype="multipart/form-data" method="post" class="">
            @csrf
              <div class="form-group">
                  <div class="input-group">
                      <input name="kode_kelas" type="text" class="form-control" id="inputNIK" placeholder="Kode Kelas">
                      <div class="input-group-addon">
                          <i class="fa fa-archive"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input name="nama" type="text" class="form-control" id="inputNama" placeholder="Nama Kelas">
                      <div class="input-group-addon">
                          <i class="fa fa-building"></i>
                      </div>
                  </div>
              </div>
              <div class="form-actions form-group">
                <button type="submit" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
          </form>
      </div>
  </div>
</div>
</section>
@endsection