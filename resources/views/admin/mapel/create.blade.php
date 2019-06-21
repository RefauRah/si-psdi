@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h2 class="col-md-12">Tambah
        <small>data mata pelajaran</small>
      </h2>
      <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fas fa-tachometer-alt"></i> Home</a></li>
        <li class="">Mapel</li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">Form Mata Pelajaran</div>
      <div class="card-body card-block">
          <form action="/mapel/create" enctype="multipart/form-data" method="post" class="">
            @csrf
              <div class="form-group">
                  <div class="input-group">
                      <input name="kode" type="text" class="form-control" id="inputNIK" placeholder="Kode Mata Pelajaran">
                      <div class="input-group-addon">
                          <i class="fa fa-archive"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input name="nama" type="text" class="form-control" id="inputNama" placeholder="Nama Mata Pelajaran">
                      <div class="input-group-addon">
                          <i class="fa fa-book"></i>
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