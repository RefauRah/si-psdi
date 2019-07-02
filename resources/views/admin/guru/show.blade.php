@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">Profile Guru</div>
      <div class="card-body card-block">
          <div class="col-md-4" style="margin:20px 0px 20px">
                    @if(is_null($guru->image))
                        <img src="{{ asset('images/default.png') }}" alt="Profile" class="img-thumbnail img-fluid" style="height: 100px">
                    @else
                        <img class="img-fluid img-thumbnail" style="height: 100px"  src="{{asset('storage/files/guru/'.$guru->image)}}" alt="Profile">
                    @endif
                </div> 
                <table class="table table-bordered table-striped" style="margin: 20px 0px 20px">
                <thead>
                </thead>
                <tbody>

                <tr>
                    <th>NIP</th>
                    <td>{{$guru->nip}}</td>
                </tr>
                
                <tr>
                <th>Nama</th>
                <td>{{$guru->nama}}</td>
                </tr>

                <tr>
                <th>Alamat</th>
                <td>{{$guru->alamat}}</td>
                </tr>
                
                <tr>
                <th>Tempat Lahir</th>
                <td>{{$guru->tempat_lahir}}</td>
                </tr>

                <tr>
                <th>Tanggal Lahir</th>
                <td>{{$guru->tgl_lahir}}</td>
                </tr>

                <tr>
                    <th>No Tlp</th>
                    <td>{{$guru->no_telp}}</td>   
                </tr>

                <tr>
                    <th>Tanggal Masuk PSDI</th>
                    <td>{{$guru->tgl_masuk}}</td>   
                </tr>
                <tr>
                    <th>Pendidikan Terakhir</th>
                    <td>{{$guru->pend_terakhir}}</td>   
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td>{{$guru->jabatan}}</td>   
                </tr>
                <tr>
                    <th>Boarding/PP</th>
                    <td>{{$guru->boarding}}</td>   
                </tr>
                <tr>
                    <th>Status Pernikahan</th>
                    <td>{{$guru->status_nikah}}</td>   
                </tr>
                <tr>
                    <th>Jumlah Keluarga Yang Dibawa</th>
                    <td>{{$guru->jumlah_kel}}</td>   
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
                  <a href="{{route('guru/cetak_profil_pdf', $guru->nip)}}" class="btn btn-primary" style="margin:0px 10px" target="_blank">CETAK PDF</a>
                  <a href="#" class="btn btn-success">Edit</a>
                  <button type="button" onclick="history.back();" class="btn btn-danger pull-right">Kembali</button>
              </div>
      </div>
  </div>
</div>
</section>
@endsection