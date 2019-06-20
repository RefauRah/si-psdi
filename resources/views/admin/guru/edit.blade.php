@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Edit
        <small>data Guru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Guru</li>
        <li class="active">Edit</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
     <!-- Horizontal Form -->
     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Guru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/guru/create" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <input type="hidden" name="id" value="{{$guru->id}}">
                <div class="form-group">
                  <label for="inputNIP" class="col-sm-2"">NIP</label>

                  <div class="col-sm-10">
                    <input name="nip" type="text" class="form-control" id="inputNIP" placeholder="No Induk Pegawai" value="{{$guru->nip}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-2">Nama</label>

                  <div class="col-sm-10">
                    <input name="nama" type="text" class="form-control" id="inputNama" placeholder="Nama" value="{{$guru->nama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="image" class="col-sm-2">Foto</label>

                  <div class="col-sm-10">
                    <input name="image" type="file" id="image">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2">Email</label>

                  <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{$guru->email}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAlamat" class="col-sm-2">Alamat</label>

                  <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" id="inputAlamat" cols="30" rows="4">{{$guru->alamat}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTempatLahir" class="col-sm-2">Tempat Lahir</label>

                  <div class="col-sm-10">
                    <input name="tempat_lahir" type="text" class="form-control" id="inputTempatLahir" placeholder="Tempat Lahir" value="{{$guru->tempat_lahir}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTanggalLahir" class="col-sm-2">Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input name="tgl_lahir" type="date" class="form-control" id="inputTanggalLahir" value="{{$guru->tgl_lahir}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTlp" class="col-sm-2">No Tlp</label>

                  <div class="col-sm-10">
                    <input name="no_telp" type="text" class="form-control" id="inputTlp" value="{{$guru->no_telp}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTanggalMasuk" class="col-sm-2">Tanggal Masuk</label>

                  <div class="col-sm-10">
                    <input name="tgl_masuk" type="date" class="form-control" id="inputTanggalMasuk" value="{{$guru->tgl_masuk}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPend" class="col-sm-2">Pendidikan Terakhir</label>

                  <div class="col-sm-10">
                    <input name="pend_terakhir" type="text" class="form-control" id="inputPend" value="{{$guru->pend_terakhir}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputJabatan" class="col-sm-2">Jabatan</label>

                  <div class="col-sm-10">
                    <input name="jabatan" type="text" class="form-control" id="inputJabatan" value="{{$guru->jabatan}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputBoarding" class="col-sm-2">Boarding/PP</label>

                  <div class="col-sm-10">
                    <input name="boarding" type="text" class="form-control" id="inputBoarding" value="{{$guru->boarding}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNikah" class="col-sm-2">Status Pernikahan</label>

                  <div class="col-sm-10">
                    @if($guru->status_nikah=="Sudah Menikah")
                      <input name="status_nikah" type="radio" id="inputNikah" value="Sudah Menikah" checked>Sudah Menikah
                    @else
                      <input name="status_nikah" type="radio" id="inputNikah" value="Sudah Menikah">Sudah Menikah
                    @endif

                    @if($guru->status_nikah=="Belum Menikah")
                      <input name="status_nikah" type="radio" id="inputNikah" value="Belum Menikah" checked>Belum Menikah
                    @else
                      <input name="status_nikah" type="radio" id="inputNikah" value="Belum Menikah">Belum Menikah
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputKel" class="col-sm-2">Jumlah Keluarga</label>

                  <div class="col-sm-10">
                    <input name="jumlah_kel" type="text" class="form-control" id="inputKel" value="{{$guru->jumlah_kel}}"> 
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

</div>
</section>
@endsection