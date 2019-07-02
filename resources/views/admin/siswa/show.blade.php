@extends('admin.template.base')

@section('content')
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">
            <?php foreach ($users as $key): ?>
      <h3>Profil Siswa {{$key->nama_siswa}}</h3>
      <p>{{$key->alamat_siswa}}</p>
    <?php endforeach; ?>
      </div>
      <div class="card-body card-block">
          <div class="col-md-4" style="padding-top:20px">
                   @if(is_null($key->image))
                        <img src="{{ asset('images/default.png') }}" alt="Profile" class="img-thumbnail img-fluid" style="height: 100px">
                    @else
                        <img class="img-fluid img-thumbnail" style="height: 100px"  src="{{asset('images/file/'.$key->image)}}" alt="Profile">
                    @endif
                </div> 
                <table class="table table-bordered table-striped" style="margin: 20px 0px 20px">
                <thead>
                </thead>
                <tbody>

                <tr>
                    <th>NIS</th>
                    <td>{{$key->nis}}</td>
                </tr>
                
                <tr>
                    <th>Nama</th>
                    <td>{{$key->nama_siswa}}</td>
                </tr>

                <tr>
                    <th>Kelas</th>
                    <td>{{$key->kode_kelas}} - {{$key->nama}}  </td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{$key->jk_siswa}}</td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>{{$key->alamat_siswa}}</td>
                </tr>
                
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{$key->tmpt_lahir}}</td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{$key->tgl_lahir}}</td>
                </tr>

                <tr>
                    <th>Persentase Hadir</th>
                    <td>{{$hadirPersen}}%</td>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                </tfoot>
                </table>
                <div class="form-actions form-group">
                  <button type="button" onclick="history.back();" class="btn btn-danger pull-right">Kembali</button>
              </div>
      </div>
  </div>
</div>
</section>
@endsection