@extends('admin.template.base')
@section('content')
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">Form Guru</div>
      <div class="card-body card-block">
          <form action="/guru/create" method="post" class="">
          @csrf
              <div class="form-group">
                  <div class="input-group">
                    <label for="inputNIP" class="col-sm-3">NIP</label>
                    <input name="nip" type="text" class="form-control" id="inputNIP" required>
                      <div class="input-group-addon">
                          <i class="fa fa-archive"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputNama" class="col-sm-3">Nama</label>
                      <input name="nama" type="text" class="form-control" id="inputNama" required>
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
                      <label for="inputEmail3" class="col-sm-3">Email</label>
                      <input name="email" type="email" class="form-control" id="inputEmail3" required>
                      <div class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputAlamat" class="col-sm-3">Alamat</label>
                      <textarea name="alamat" class="form-control" id="inputAlamat" cols="30" rows="4" required></textarea>
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTempatLahir" class="col-sm-3">Tempat Lahir</label>
                      <input name="tempat_lahir" type="text" class="form-control" id="inputTempatLahir" required>
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTanggalLahir" class="col-sm-3">Tanggal Lahir</label>
                      <input name="tgl_lahir" type="date" class="form-control" id="inputTanggalLahir" required>
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTlp" class="col-sm-3">No Tlp</label>
                      <input name="no_telp" type="text" class="form-control" id="inputTlp" required>
                      <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTanggalMasuk" class="col-sm-3">Tanggal Masuk</label>
                      <input name="tgl_masuk" type="date" class="form-control" id="inputTanggalMasuk" required>
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputPend" class="col-sm-3">Pendidikan Terakhir</label>
                      <input name="pend_terakhir" type="text" class="form-control" id="inputPend" required>
                      <div class="input-group-addon">
                          <i class="fa fa-book"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputJabatan" class="col-sm-3">Jabatan</label>
                      <input name="jabatan" type="text" class="form-control" id="inputJabatan" required>
                      <div class="input-group-addon">
                          <i class="fa fa-star"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputBoarding" class="col-sm-3">Boarding/PP</label>
                      <input name="boarding" type="text" class="form-control" id="inputBoarding" required>
                      <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputNikah" class="col-sm-3">Status Pernikahan</label>
                      <div class="radio">
                      <input name="status_nikah" type="radio" id="inputNikah" value="Sudah Menikah">Sudah Menikah
                      </div>
                      <div class="radio col-sm-5">
                      <input name="status_nikah" type="radio" id="inputNikah" value="Belum Menikah">Belum Menikah
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