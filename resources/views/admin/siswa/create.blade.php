@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tambah
        <small>data siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Siswa</li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
     <!-- Horizontal Form -->
     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/siswa/create" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputNIK" class="col-sm-2">NIS</label>

                  <div class="col-sm-10">
                    <input name='nik' type="text" class="form-control" id="inputNIK" placeholder="No Induk Siswa" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-2">Nama</label>

                  <div class="col-sm-10">
                    <input name='nama'type="text" class="form-control" id="inputNama" placeholder="Nama" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="image" class="col-sm-2">Foto</label>

                  <div class="col-sm-10">
                    <input name="image" type="file" id="image">
                  </div>
                </div>
                <div class="form-group">
                  <label for="jk" class="col-sm-2">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input name="jk" type="radio" id="jk" value="Laki-Laki" required>Laki-Laki
                    <input name="jk" type="radio" id="jk" value="Perempuan" required>Perempuan
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2">Email Orang Tua</label>

                  <div class="col-sm-10">
                    <input name='email'type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAlamat" class="col-sm-2">Alamat</label>

                  <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" id="inputAlamat" cols="30" rows="4" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTempatLahir" class="col-sm-2">Tempat Lahir</label>

                  <div class="col-sm-10">
                    <input name='tmpt_lahir'type="text" class="form-control" id="inputTempatLahir" placeholder="Tempat Lahir" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTanggalLahir" class="col-sm-2">Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input name='tgl_lahir'type="date" class="form-control" id="inputTanggalLahir" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTlp" class="col-sm-2">No Telepon Orang Tua</label>

                  <div class="col-sm-10">
                    <input name='no_telp'type="text" class="form-control" id="inputTlp" required>
                  </div>
                </div>


                <!-- <div class="form-group">
                  <label for="inputOrtu" class="col-sm-2">Nama Orang Tua</label>

                  <div class="col-sm-10">
                    <input name='ortu'type="text" class="form-control" id="inputOrtu">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputemailOrtu" class="col-sm-2">Email Orang Tua</label>

                  <div class="col-sm-10">
                    <input name='emailortu'type="text" class="form-control" id="inputemailOrtu">
                  </div>
                </div>
              </div> -->

            <!--     <div class="form-group">
                  <label for="inputNamaortu" class="col-sm-2">Nama Orang Tua</label>

                  <div class="col-sm-10">
                    <input name='ortu'type="text" class="form-control" id="inputNamaortu">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmailortu" class="col-sm-2">Email Ortu</label>

                  <div class="col-sm-10">
                    <input name='emailortu'type="email" class="form-control" id="inputEmailOrtu">
                  </div>
                </div>
              </div> -->
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