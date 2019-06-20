@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h2 class="col-md-12">Tambah
        <small>data siswa</small>
      </h2>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Siswa</li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">Form Siswa</div>
      <div class="card-body card-block">
          <form action="/siswa/create" enctype="multipart/form-data" method="post" class="">
            {{ csrf_field() }}
              <div class="form-group">
                  <div class="input-group">
                      <input name='nik' type="text" class="form-control" id="inputNIK" placeholder="No Induk Siswa">
                      <div class="input-group-addon">
                          <i class="fa fa-archive"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input name='nama'type="text" class="form-control" id="inputNama" placeholder="Nama">
                      <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input name="image" type="file" id="image">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <label for="jk" class="col-sm-3">Jenis Kelamin</label>
                    <div class="radio">
                      <input name="jk" type="radio" id="jk" value="Laki-Laki">Laki-Laki
                    </div>
                    <div class="radio col-sm-5">
                      <input name="jk" type="radio" id="jk" value="Perempuan">Perempuan
                    </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input name='email'type="email" class="form-control" id="inputEmail3" placeholder="Email">
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
              <div class="form-group">
                  <div class="input-group">
                      <input name='tmpt_lahir'type="text" class="form-control" id="inputTempatLahir" placeholder="Tempat Lahir">
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <label for="inputTanggalLahir" class="col-sm-2">Tanggal Lahir</label>
                      <input name='tgl_lahir'type="date" class="form-control" id="inputTanggalLahir">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input name='no_telp'type="text" class="form-control" id="inputTlp" placeholder="No. Telfon">
                      <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
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