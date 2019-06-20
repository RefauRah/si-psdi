@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<section class="content-header">
      <h2 class="col-md-12">Tabel
        <small>Guru</small>
      </h2>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa-dashboard"></i> Home</a></li>
        <li class="active">Guru</li>
      </ol>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3>Data Guru PSDI</h3>
        </div>
        <div class="card-body">
            <div class="container">         
        <!-- Tabel -->
        <div class="col-lg-12">
            <div class="row form-group">
                <div class="input-group col-md-4 ml-auto">
                    <div class="input-group-btn">
                        <button class="btn btn-secondary">
                            <i class="fa fa-search"></i> Search
                        </button>
                    </div>
                    <input type="text" id="input1-group2" name="input1-group2" placeholder="Cari" class="form-control">
                </div>
            <div class="table-responsive fl-table">
                <table id="example1" class="table table-borderless table-data3 table-wrapper">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>No Tlp</th>
                            <th class="text-left">#</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $nomer = 1; ?>

                     @foreach ($guru as $row)
                        <tr>
                            <td>{{$nomer}}</td>
                            <td>{{ $row->nip}}</td>
                            <td>{{ $row->nama}}</td>
                            <td>{{ $row->alamat}}</td>
                            <td>{{ $row->tempat_lahir}}</td>
                            <td>{{ $row->tgl_lahir}}</td>
                            <td>{{ $row->no_telp}}</td>
                            <td><a href="{{url('/guru/show')}}" class="btn btn-sm btn-primary">Lihat Profil</a></td>
                            <?php $nomer++; ?>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            <a href="{{url('/guru/create')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
        </div>
    </div>
</section>
@endsection