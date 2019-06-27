@extends('admin.template.base')

@section('content')
<section class="content-header">
    <?php foreach ($useredit as $key): ?>
      <h1>Profil Siswa {{$key->nama}}</h1>
      <p>{{$key->alamat}}</p>
    <?php endforeach; ?>
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<section class="content-header">
      <h1>
        Lihat
        <small>data siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Siswa</li>
        <li class="active">Profil</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profil Siswa PSDI</h3>
            </div>
<!-- /.box-header ALTER TABLE `siswa` AUTO_INCREMENT = 0;-->
        @foreach($useredit as $key)
        <form action="/siswa/update" method="post">
            <div class="box-body">
                <div class="col-md-4" style="padding-top:20px">
                   @if(is_null($key->image))
                        <img src="{{ asset('images/default.png') }}" alt="Profile" class="img-thumbnail img-fluid" style="height: 100px">
                    @else
                        <img class="img-fluid img-thumbnail" style="height: 100px"  src="{{asset('storage/files/siswa/'.$key->image)}}" alt="Profile">
                    @endif
                </div> 

                <table class="table table-bordered table-striped">
                {{ csrf_field() }}
                <thead>
                </thead>
                <tbody>
                
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
                        <th><label for="nis">NIS</label></th>
                        <td><input type="text" name="nis" class="form-control" value="{{$key->nis}}"></td>
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
                        <th><label for="kelas">Kelas</label></th>
                        <td><input type="text" name="kelas" class="form-control" value=""></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="jk">Jenis Kelamin</label></th>
                        <td>
                        <select class="form-control" name="jk" >
                        <option value="{{$key->jk}}">{{$key->jk}}</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        </select></td>
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
                        <th><label for="tmpt_lahir">Tempat Lahir</label></th>
                        <td><input type="text" name="tmpt_lahir" class="form-control" value="{{$key->tmpt_lahir}}"></td>
                    </div>
                </tr>

                <tr>
                    <div class="form-group has-feedback">
                        <th><label for="tgl_lahir">Tanggal Lahir</label></th>
                        <td><input type="text" name="tgl_lahir" class="form-control" value="{{$key->tgl_lahir}}"></td>
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
            <a href="{{url('/siswa')}}" class="btn btn-danger">Kembali</a>
            <input type="submit" value="Simpan Data"> 
            </div>
            </form>
            @endforeach

            
        </div>
    </div>
</section>
@endsection