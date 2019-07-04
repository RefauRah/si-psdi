@extends('admin.template.base')

@section('content')
<<<<<<< HEAD
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">
    <?php foreach ($guru as $key): ?>
      <h3>Profil  {{$key->nama}}</h3>
=======
<section class="content-header">
    <?php foreach ($guru as $key): ?>
      <h1>Profil  {{$key->nama}}</h1>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
      <p>{{$key->alamat}}</p>
    <?php endforeach; ?>
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<<<<<<< HEAD
      </div>
      <div class="card-body card-block">
          <form action="/guru/update" method="post" class="">
            <div class="col-md-4" style="margin:20px 0px 20px">
               @if(is_null($key->image))
                    <img src="{{ asset('images/default.png') }}" alt="Profile" class="img-thumbnail img-fluid" style="height: 100px">
                @else
                    <img class="img-fluid img-thumbnail" style="height: 100px"  src="{{asset('storage/files/'.$key->image)}}" alt="Profile">
                @endif  
            </div>
          {{ csrf_field() }}
              <div class="form-group">
                  <div class="input-group">
                    <label for="inputNIP" class="col-sm-3">NIP</label>
                    <input type="text" name="nip" class="form-control" value="{{$key->nip}}">
                      <div class="input-group-addon">
                          <i class="fa fa-archive"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputNama" class="col-sm-3">Nama</label>
                      <input type="text" name="nama" class="form-control" value="{{$key->nama}}">
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
                      <input type="text" name="email" class="form-control" value="{{$key->email}}">
                      <div class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputAlamat" class="col-sm-3">Alamat</label>
                      <input type="text" name="alamat" class="form-control" value="{{$key->alamat}}">
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTempatLahir" class="col-sm-3">Tempat Lahir</label>
                      <input type="text" name="tempat_lahir" class="form-control" value="{{$key->tempat_lahir}}">
                      <div class="input-group-addon">
                          <i class="fa fa-home"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTanggalLahir" class="col-sm-3">Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" class="form-control" value="{{$key->tgl_lahir}}">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTlp" class="col-sm-3">No Tlp</label>
                      <input type="number" name="no_telp" class="form-control" value="{{$key->no_telp}}">
                      <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputTanggalMasuk" class="col-sm-3">Tanggal Masuk</label>
                      <input type="date" name="tgl_masuk" class="form-control" value="{{$key->tgl_masuk}}">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputPend" class="col-sm-3">Pendidikan Terakhir</label>
                      <input type="text" name="pend_terakhir" class="form-control" value="{{$key->pend_terakhir}}">
                      <div class="input-group-addon">
                          <i class="fa fa-book"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputJabatan" class="col-sm-3">Jabatan</label>
                      <input type="text" name="jabatan" class="form-control" value="{{$key->jabatan}}">
                      <div class="input-group-addon">
                          <i class="fa fa-star"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputBoarding" class="col-sm-3">Boarding/PP</label>
                      <input type="text" name="boarding" class="form-control" value="{{$key->boarding}}">
                      <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputNikah" class="col-sm-3">Status Pernikahan</label>
                      <select class="form-control" name="status_nikah" >
                      <option value="{{$key->status_nikah}}">({{$key->status_nikah}})</option>
                      <option value="Sudah Menikah">Sudah Menikah</option>
                      <option value="Belum Menikah">Belum Menikah</option>
                      </select>
                  </div>
              </div>

              <div class="form-group">
                  <div class="input-group">
                      <label for="inputKel" class="col-sm-3">Jumlah Keluarga</label>
                      <input type="text" name="jumlah_kel" class="form-control" value="{{$key->jumlah_kel}}">
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
<section class="content-header">
      <h1>
        Lihat
        <small>data </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""></li>
        <li class="active">Profil</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profil Guru PSDI</h3>
            </div>
<!-- /.box-header ALTER TABLE `siswa` AUTO_INCREMENT = 0;-->

        <form action="/guru/update" method="post">
            <div class="box-body">
                <div class="col-md-4" style="padding-top:20px">
                   @if(is_null($key->image))
                        <img src="{{ asset('images/default.png') }}" alt="Profile" class="img-thumbnail img-fluid" style="height: 100px">
                    @else
                        <img class="img-fluid img-thumbnail" style="height: 100px"  src="{{asset('storage/files/'.$key->image)}}" alt="Profile">
                    @endif  
                </div> 

                <table class="table table-bordered table-striped">
                {{ csrf_field() }}
                <thead>
                </thead>
                <tbody>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="nip">NIP</label></th>
                        <td><input type="text" name="nip" class="form-control" value="{{$key->nip}}"></td>
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
                        <th><label for="nama">Nama</label></th>
                        <td><input type="text" name="nama" class="form-control" value="{{$key->nama}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="email">Email</label></th>
                        <td><input type="text" name="email" class="form-control" value="{{$key->email}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="alamat">Alamat</label></th>
                        <td><input type="text" name="alamat" class="form-control" value="{{$key->alamat}}"></td>
                    </div>
                </tr>


                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="tempat_lahir">Tempat Lahir</label></th>
                        <td><input type="text" name="tempat_lahir" class="form-control" value="{{$key->tempat_lahir}}"></td>
                    </div>
                </tr>
               
                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="tgl_lahir">Tanggal Lahir</label></th>
                        <td><input type="date" name="tgl_lahir" class="form-control" value="{{$key->tgl_lahir}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="no_telp">No Telepon</label></th>
                        <td><input type="number" name="no_telp" class="form-control" value="{{$key->no_telp}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="tgl_masuk">Tanggal Masuk</label></th>
                        <td><input type="date" name="tgl_masuk" class="form-control" value="{{$key->tgl_masuk}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="pend_terakhir">Pendidikan Terakhir</label></th>
                        <td><input type="text" name="pend_terakhir" class="form-control" value="{{$key->pend_terakhir}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="jabatan">Jabatan</label></th>
                        <td><input type="text" name="jabatan" class="form-control" value="{{$key->jabatan}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="boarding">Boarding/PP</label></th>
                        <td><input type="text" name="boarding" class="form-control" value="{{$key->boarding}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="status_nikah">Status Menikah</label></th>
                        <td>
                        <select class="form-control" name="status_nikah" >
                        <option value="{{$key->status_nikah}}">({{$key->status_nikah}})</option>
                        <option value="Sudah Menikah">Sudah Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        </select></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="jumlah_kel">Jumlah Keluarga</label></th>
                        <td><input type="text" name="jumlah_kel" class="form-control" value="{{$key->jumlah_kel}}"></td>
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
            <a href="{{url('/guru')}}" class="btn btn-danger">Kembali</a>
            <input type="submit" value="Simpan Data"> 
            </div>
            </form>


            
        </div>
    </div>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
</section>
@endsection