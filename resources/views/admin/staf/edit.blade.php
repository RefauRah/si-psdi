@extends('admin.template.base')

@section('content')
<<<<<<< HEAD
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">
          <?php foreach ($staf as $key): ?>
      <h3>Edit Profil Staff ({{$key->nama_staf}})</h3>
=======
<section class="content-header">
    <?php foreach ($staf as $key): ?>
      <h1>Profil Staf {{$key->nama_staf}}</h1>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
      <p>{{$key->alamat_staf}}</p>
    <?php endforeach; ?>
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<<<<<<< HEAD
      </div>
      <div class="card-body card-block">
          <form action="/staf/update" method="post" class="">
            <div class="col-md-4" style="margin:20px 0px 20px">
=======
<section class="content-header">
      <h1>
        Lihat
        <small>data staf</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Staf</li>
        <li class="active">Profil</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profil Staf PSDI</h3>
            </div>
<!-- /.box-header ALTER TABLE `siswa` AUTO_INCREMENT = 0;-->

        <form action="/staf/update" method="post">
            <div class="box-body">
                <div class="col-md-4" style="padding-top:20px">
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
                   @if(is_null($key->image))
                        <img src="{{ asset('images/default.png') }}" alt="Profile" class="img-thumbnail img-fluid" style="height: 100px">
                    @else
                        <img class="img-fluid img-thumbnail" style="height: 100px"  src="{{asset('storage/files/staf'.$key->image)}}" alt="Profile">
                    @endif  
<<<<<<< HEAD
                </div>
          {{ csrf_field() }}
              <div class="form-group">
                  <div class="input-group">
                    <label for="inputNIP" class="col-sm-3">NIP</label>
                    <input type="text" name="nip_staf" class="form-control" value="{{$key->nip_staf}}">
                      <div class="input-group-addon">
                          <i class="fa fa-archive"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputNama" class="col-sm-3">Nama</label>
                      <input type="text" name="nama_staf" class="form-control" value="{{$key->nama_staf}}">
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
                      <input type="text" name="email_staf" class="form-control" value="{{$key->email_staf}}">
                      <div class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputAlamat" class="col-sm-3">Alamat</label>
                      <input type="text" name="alamat_staf" class="form-control" value="{{$key->alamat_staf}}">
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTempatLahir" class="col-sm-3">Tempat Lahir</label>
                      <input type="text" name="tempat_lahir_staf" class="form-control" value="{{$key->tempat_lahir_staf}}">
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTanggalLahir" class="col-sm-3">Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir_staf" class="form-control" value="{{$key->tgl_lahir_staf}}">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTlp" class="col-sm-3">No Tlp</label>
                      <input type="number" name="no_telp_staf" class="form-control" value="{{$key->no_telp_staf}}">
                      <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTanggalMasuk" class="col-sm-3">Tanggal Masuk</label>
                      <input type="date" name="tgl_masuk_staf" class="form-control" value="{{$key->tgl_masuk_staf}}">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputPend" class="col-sm-3">Pendidikan Terakhir</label>
                      <input type="text" name="pend_terakhir_staf" class="form-control" value="{{$key->pend_terakhir_staf}}">
                      <div class="input-group-addon">
                          <i class="fa fa-book"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputJabatan" class="col-sm-3">Jabatan</label>
                      <input type="text" name="jabatan_staf" class="form-control" value="{{$key->jabatan_staf}}">
                      <div class="input-group-addon">
                          <i class="fa fa-star"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputBoarding" class="col-sm-3">Boarding/PP</label>
                      <input type="text" name="boarding_staf" class="form-control" value="{{$key->boarding_staf}}">
                      <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputNikah" class="col-sm-3">Status Pernikahan</label>
=======
                </div> 

                <table class="table table-bordered table-striped">
                {{ csrf_field() }}
                <thead>
                </thead>
                <tbody>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="nip_staf">NIP</label></th>
                        <td><input type="text" name="nip_staf" class="form-control" value="{{$key->nip_staf}}"></td>
                    </div>
                </tr> 
                
                <tr>
                <div class="form-group">
                  <th><label for="image" class="col-sm-2">Foto</label></th>

                <td>x<div class="col-sm-10">
                    <input name="image" type="file" id="image">
                  </div></th>
                </div>
                </tr>
                
                
                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="nama_staf">Nama</label></th>
                        <td><input type="text" name="nama_staf" class="form-control" value="{{$key->nama_staf}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="email_staf">Email</label></th>
                        <td><input type="text" name="email_staf" class="form-control" value="{{$key->email_staf}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="alamat_staf">Alamat</label></th>
                        <td><input type="text" name="alamat_staf" class="form-control" value="{{$key->alamat_staf}}"></td>
                    </div>
                </tr>


                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="tempat_lahir_staf">Tempat Lahir</label></th>
                        <td><input type="text" name="tempat_lahir_staf" class="form-control" value="{{$key->tempat_lahir_staf}}"></td>
                    </div>
                </tr>
               
                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="tgl_lahir_staf">Tanggal Lahir</label></th>
                        <td><input type="date" name="tgl_lahir_staf" class="form-control" value="{{$key->tgl_lahir_staf}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="no_telp_staf">No Telepon</label></th>
                        <td><input type="number" name="no_telp_staf" class="form-control" value="{{$key->no_telp_staf}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="tgl_masuk_staf">Tanggal Masuk</label></th>
                        <td><input type="date" name="tgl_masuk_staf" class="form-control" value="{{$key->tgl_masuk_staf}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="pend_terakhir_staf">Pendidikan Terakhir</label></th>
                        <td><input type="text" name="pend_terakhir_staf" class="form-control" value="{{$key->pend_terakhir_staf}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="jabatan_staf">Jabatan</label></th>
                        <td><input type="text" name="jabatan_staf" class="form-control" value="{{$key->jabatan_staf}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="boarding_staf">Boarding/PP</label></th>
                        <td><input type="text" name="boarding_staf" class="form-control" value="{{$key->boarding_staf}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="status_nikah_staf">Status Menikah</label></th>
                        <td>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
                        <select class="form-control" name="status_nikah_staf" >
                        <option value="{{$key->status_nikah_staf}}">({{$key->status_nikah_staf}})</option>
                        <option value="Sudah Menikah">Sudah Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
<<<<<<< HEAD
                        </select>
                  </div>
              </div>

              <div class="form-group">
                  <div class="input-group">
                      <label for="inputKel" class="col-sm-3">Jumlah Keluarga</label>
                      <input type="text" name="jumlah_kel_staf" class="form-control" value="{{$key->jumlah_kel_staf}}">
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
=======
                        </select></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="jumlah_kel_staf">Jumlah Keluarga</label></th>
                        <td><input type="text" name="jumlah_kel_staf" class="form-control" value="{{$key->jumlah_kel_staf}}"></td>
                    </div>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                </tfoot>
                </table>
            </div>
<!-- /.box-body -->
            <div class="button" style="margin-left:10px;margin-right:10px;padding-bottom:10px;">
            <a href="{{url('/staf')}}" class="btn btn-danger">Kembali</a>
            <input type="submit" value="Simpan Data"> 
            </div>
            </form>


            
        </div>
    </div>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
</section>
@endsection