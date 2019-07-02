@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">Profile Staff</div>
      <div class="card-body card-block">
          <div class="col-md-4" style="padding-top:20px">
                    @if(is_null($staf->image))
                        <img src="{{ asset('images/default.png') }}" alt="Profile" class="img-thumbnail img-fluid" style="height: 100px">
                    @else
                        <img class="img-fluid img-thumbnail" style="height: 100px"  src="{{asset('storage/files/guru/'.$staf->image)}}" alt="Profile">
                    @endif
                </div>  
                <table class="table table-bordered table-striped" style="margin: 20px 0px 20px">
                <thead>
                </thead>
                <tbody>

                <tr>
                    <th>NIP</th>
                    <td>{{$staf->nip_staf}}</td>
                </tr>
                
                <tr>
                <th>Nama</th>
                <td>{{$staf->nama_staf}}</td>
                </tr>

                <tr>
                <th>Alamat</th>
                <td>{{$staf->alamat_staf}}</td>
                </tr>
                
                <tr>
                <th>Tempat Lahir</th>
                <td>{{$staf->tempat_lahir_staf}}</td>
                </tr>

                <tr>
                <th>Tanggal Lahir</th>
                <td>{{$staf->tgl_lahir_staf}}</td>
                </tr>

                <tr>
                    <th>No Tlp</th>
                    <td>{{$staf->no_telp_staf}}</td>   
                </tr>

                <tr>
                    <th>Tanggal Masuk PSDI</th>
                    <td>{{$staf->tgl_masuk_staf}}</td>   
                </tr>
                <tr>
                    <th>Pendidikan Terakhir</th>
                    <td>{{$staf->pend_terakhir_staf}}</td>   
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td>{{$staf->jabatan_staf}}</td>   
                </tr>
                <tr>
                    <th>Boarding/PP</th>
                    <td>{{$staf->boarding_staf}}</td>   
                </tr>
                <tr>
                    <th>Status Pernikahan</th>
                    <td>{{$staf->status_nikah_staf}}</td>   
                </tr>
                <tr>
                    <th>Jumlah Keluarga Yang Dibawa</th>
                    <td>{{$staf->jumlah_kel_staf}}</td>   
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