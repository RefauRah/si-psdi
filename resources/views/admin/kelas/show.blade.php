@extends('admin.template.base')
@section('content')
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
    @foreach ($kelas as $kelas)
      <div class="card-header">Data Kelas {{ $kelas->nama}}</div>
      <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col col-sm-2">
                        <p>Kode Kelas :</p>
                    </div>
                    <div>
                        <h5>{{ $kelas->kode_kelas}}</h5>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-sm-2">
                        <p>Jenis Kelas :</p>
                    </div>
                    <div>
                        <h5>{{$kelas->jenis_kelas}}</h5>
                    </div>
                </div>
            @endforeach
          <form action="/kelas/anggota/tambahAnggota" method="post" class="">
          @csrf
              <table id="example1" class="table table-striped table-responsive table-bordered data">
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
              <div class="form-actions form-group" style="margin:20px">
                  <button type="button" onclick="history.back();" class="btn btn-danger">Back</button>
              </div>
          </form>
      </div>
  </div>
</div>
</section>
@endsection