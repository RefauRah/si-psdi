@extends('admin.template.base')
@section('content')
<<<<<<< HEAD
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
    @foreach ($kelas as $kelas)
      <div class="card-header">Data Kelas {{ $kelas->nama}}</div>
      <div class="card-body card-block">
=======
<section class="content-header">
      <h1>
        Tabel
        <small>Daftar Siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kelas</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                @foreach ($kelas as $kelas)
                <h3 class="box-title" style="margin: 0px 0px 20px">Data Kelas {{ $kelas->nama}}</h3>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
                <div class="row form-group">
                    <div class="col col-sm-2">
                        <p>Kode Kelas :</p>
                    </div>
                    <div>
<<<<<<< HEAD
                        <h5>{{ $kelas->kode_kelas}}</h5>
=======
                        <label>{{ $kelas->kode_kelas}}</label>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-sm-2">
                        <p>Jenis Kelas :</p>
                    </div>
                    <div>
<<<<<<< HEAD
                        <h5>{{$kelas->jenis_kelas}}</h5>
                    </div>
                </div>
            @endforeach
          <form action="/kelas/anggota/tambahAnggota" method="post" class="">
          @csrf
              <table id="example1" class="table table-striped table-bordered data">
=======
                        <label>{{$kelas->jenis_kelas}}</label>
                    </div>
                </div>
                @endforeach
                <!-- <a href="{{url('/kelas/create')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a> -->
            </div>
<!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                   <!--  <th>Wali Kelas</th>
                    <th>NO Ruangan</th> -->
                </tr>
                </thead>
                <tbody>
                <?php $nomer = 1; ?>

                @foreach ($siswa as $row)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $row->nis}}</td>
                    <td>{{ $row->nama_siswa}}</td>
                    <?php $nomer++; ?>
                </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                   <!--  <th>Nama</th>
                    <th>Wali Kelas</th>
                    <th>NO Ruangan</th> -->
                </tr>
                </tfoot>
                </table>
<<<<<<< HEAD
              <div class="form-actions form-group" style="margin:20px">
                  <button type="button" onclick="history.back();" class="btn btn-danger">Back</button>
              </div>
          </form>
      </div>
  </div>
</div>
=======
                 <div class="box-footer">
                    <button type="button" onclick="history.back();" class="btn btn-danger">Back</button>
                </div>
            </div>
<!-- /.box-body -->
        </div>
    </div>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
</section>
@endsection