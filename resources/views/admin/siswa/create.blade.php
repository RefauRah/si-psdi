@extends('admin.template.base')
@section('content')
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">Form Siswa</div>
      <div class="card-body card-block">
          <form action="/siswa/create" method="post" class="" enctype="multipart/form-data">
          {{ csrf_field() }}
              <div class="form-group">
                  <div class="input-group">
                    <label for="inputNIP" class="col-sm-3">NIS</label>
                    <input name='nis' type="number" class="form-control" id="inputNIK" required>
                      <div class="input-group-addon">
                          <i class="fa fa-archive"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputNama" class="col-sm-3">Nama</label>
                      <input name='nama_siswa'type="text" class="form-control" id="inputNama" required>
                      <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="image" class="col-sm-3">Foto</label>
                      <input name="image" type="file" id="image">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputNikah" class="col-sm-3">Jenis Kelamin</label>
                      <div class="radio">
                      <input name="jk_siswa" type="radio" id="jk" value="Laki-Laki" required>Laki-Laki
                      </div>
                      <div class="radio col-sm-5">
                      <input name="jk_siswa" type="radio" id="jk" value="Perempuan" required>Perempuan
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputEmail3" class="col-sm-3">Email Orang Tua</label>
                      <input name='email'type="email" class="form-control" id="inputEmail3" required>
                      <div class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputAlamat" class="col-sm-3">Alamat</label>
                      <textarea name="alamat_siswa" class="form-control" id="inputAlamat" cols="30" rows="4" required></textarea>
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTempatLahir" class="col-sm-3">Tempat Lahir</label>
                      <input name='tmpt_lahir'type="text" class="form-control" id="inputTempatLahir" required>
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTanggalLahir" class="col-sm-3">Tanggal Lahir</label>
                      <input name='tgl_lahir'type="date" class="form-control" id="inputTanggalLahir" required>
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTlp" class="col-sm-3">No Tlp Orang Tua</label>
                      <input name='no_telp'type="text" class="form-control" id="inputTlp" required>
                      <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                      </div>
                  </div>
              </div>

              <div class="form-group">
                  <div class="input-group">
                      <label for="inputKel" class="col-sm-3">Jumlah Keluarga</label>
                      <input name="jumlah_kel" type="text" class="form-control" id="inputKel">
                      <div class="input-group-addon">
                          <i class="fa fa-users"></i>
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