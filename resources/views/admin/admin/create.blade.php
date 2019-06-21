@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h2 class="col-md-12">Tambah
        <small>data admin</small>
      </h2>
      <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fas fa-tachometer-alt"></i> Home</a></li>
        <li class="">Admin</li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">Form Admin</div>
      <div class="card-body card-block">
          <form action="" method="post" class="">
              <div class="form-group">
                  <div class="input-group">
                      <input type="text" class="form-control" id="inputNama" placeholder="Nama">
                      <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                      <div class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <textarea name="alamat" class="form-control" id="inputAlamat" cols="30" rows="4" placeholder="Alamat"></textarea>
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                      </div>
                  </div>
              </div>
              <div class="form-actions form-group">
                  <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
          </form>
      </div>
  </div>
</div>
</section>
@endsection