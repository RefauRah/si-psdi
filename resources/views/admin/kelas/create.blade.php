@extends('admin.template.base')
@section('content')
<<<<<<< HEAD
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
                      <div class="col-sm-5">
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
=======
<section class="content-header">
      <h1>
        Tambah
        <small>data kelas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Kelas</li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
     <!-- Horizontal Form -->
     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Kelas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/kelas/create">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputNIK" class="col-sm-2">Kode Kelas</label>

                  <div class="col-sm-10">
                    <input name="kode_kelas" type="text" class="form-control" id="inputNIK" placeholder="Kode Kelas" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-2">Nama Kelas</label>

                  <div class="col-sm-10">
                    <input name="nama" type="text" class="form-control" id="inputNama" placeholder="Nama Kelas" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputJenisKelas" class="col-sm-2">Jenis Kelas</label>

                  <div class="col-sm-10">
                    <div class="col-sm-10">
                    <input name="jenis_kelas" type="radio" id="jenis_kelas" value="Reguler" checked>Reguler<br>
                    <input name="jenis_kelas" type="radio" id="jenis_kelas" value="Pramubaligh">Pra Mubaligh<br>
                    <input name="jenis_kelas" type="radio" id="jenis_kelas" value="Pascamubaligh">Pasca Mubaligh<br>
                    <input name="jenis_kelas" type="radio" id="jenis_kelas" value="Bimbel">Bimbel<br>
                    <input name="jenis_kelas" type="radio" id="jenis_kelas" value="Pesantren">Pesantren
                  </div>
                </div>
              </div>

              <!-- <div class="form-group">
                  <label for="inputPraPasca" class="col-sm-2">Pra/Pasca Mubaligh (*Khusus kelas pengajian)</label>

                  <div class="col-sm-10">
                    <div class="col-sm-10">
                    <input name="prapasca" type="radio" id="inutPraPasca" value="Pra Mubaligh" checked>Pra Mubaligh<br>
                    <input name="prapasca" type="radio" id="inutPraPasca" value="Pasca Mubaligh">Pasca Mubaligh
                  </div>
                </div>
              </div>
            </div> -->
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Reset</button>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
          </form>
      </div>
  </div>
</div>
</section>
@endsection