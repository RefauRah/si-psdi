@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h2 class="col-md-12">Tambah
        <small>data guru</small>
      </h2>
      <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fas fa-tachometer-alt"></i> Home</a></li>
        <li class="">Guru</li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">Form Guru</div>
      <div class="card-body card-block">
          <form action="" method="post" class="">
            @csrf
              <div class="form-group">
                  <div class="input-group">
                      <input name="nip" type="text" class="form-control" id="inputNIP" placeholder="No Induk Pegawai">
                      <div class="input-group-addon">
                          <i class="fa fa-archive"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input name="nama" type="text" class="form-control" id="inputNama" placeholder="Nama">
                      <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input name="image" type="file" id="image" placeholder="Nama">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
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
                      <input name="tempat_lahir" type="text" class="form-control" id="inputTempatLahir" placeholder="Tempat Lahir">
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <label for="inputTanggalLahir" class="col-sm-2">Tanggal Lahir</label>
                      <input name="tgl_lahir" type="date" class="form-control" id="inputTanggalLahir">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input name="no_telp" type="text" class="form-control" id="inputTlp" placeholder="No. Telfon">
                      <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <label for="inputTanggalMasuk" class="col-sm-2">Tanggal Masuk</label>
                      <input name="tgl_masuk" type="date" class="form-control" id="inputTanggalMasuk">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input name="pend_terakhir" type="text" class="form-control" id="inputPend" placeholder="Pendidikan Terakhir">
                      <div class="input-group-addon">
                          <i class="fa fa-book"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input name="jabatan" type="text" class="form-control" id="inputJabatan" placeholder="Jabatan">
                      <div class="input-group-addon">
                          <i class="fa fa-star"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input name="boarding" type="text" class="form-control" id="inputBoarding" placeholder="Boarding/PP">
                      <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <label for="inputNikah" class="col-sm-3">Status Pernikahan</label>
                    <div class="radio">
                      <input name="status_nikah" type="radio" id="inputNikah" value="Sudah Menikah"> Sudah Menikah
                    </div>
                    <div class="radio col-sm-5">
                      <input name="status_nikah" type="radio" id="inputNikah" value="Belum Menikah"> Belum Menikah
                    </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <input name="jumlah_kel" type="text" class="form-control" id="inputKel" placeholder="Jumlah Keluarga">
                      <div class="input-group-addon">
                          <i class="fa fa-users"></i>
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