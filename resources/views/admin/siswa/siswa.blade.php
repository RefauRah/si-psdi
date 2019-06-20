@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h2 class="col-md-12">Tabel
        <small>Siswa</small>
      </h2>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa-dashboard"></i> Home</a></li>
        <li class="active">Guru</li>
      </ol>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3>Data Siswa PSDI</h3>
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
                            <th>NIS</th>
                            <th>foto</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th class="text-left">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $nomer = 1; ?>
                
                    @foreach ($siswa as $siswa)
                        <tr>
                            <td>{{$nomer}}</td>

                            <td><a href="{{url('/siswa/'.$siswa->nik)}}">{{ $siswa->nik}}</a></td>
                            @if(is_null($siswa->image))
                                <td>
                                    <img src="{{ asset('images/default.png') }}" style="height: 50px" class="img-fluid">
                                </td>
                            @else
                                <td><img class="img-fluid" style="height: 50px"  src="{{asset('storage/files/siswa/'.$siswa->image)}}"></td>
                            @endif
                            <td>{{ $siswa->nama}}</a></td>
                            <td>{{ $siswa->kelas}}</td>
                            <td>{{ $siswa->tmpt_lahir}}</td>
                            <td>{{ $siswa->tgl_lahir}}</td>
                            <td>{{ $siswa->jk}}</td>
                            <td>{{ $siswa->alamat}}</td>
                            <td>
                                <a href="{{url('/siswa/hapus')}}" class="btn btn-sm btn-danger">Hapus</a>
                                <a href="{{url('/siswa/edit')}}" class="btn btn-sm btn-primary">Edit</a> 

                            <?php $nomer++; ?>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            <a href="{{url('/siswa/create')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
        </div>
    </div>
</section>
@endsection