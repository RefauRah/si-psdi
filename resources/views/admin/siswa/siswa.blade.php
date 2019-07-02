@extends('admin.template.base')
@section('content')
<div class="container mt-4">
<div class="card bg-light">
    <div class="card-header">
        <h4>Data Siswa</h4>
    </div>
    <div class="card-body">
        <table class="table table-striped table-responsive table-bordered data">
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
                    <th>Tindakan</th>

                </tr>
                </thead>
                <tbody>

                <?php $nomer = 1; ?>
                
                @foreach ($siswa as $siswa)
                <tr>
                    <td>{{$nomer}}</td>

                    <td>{{ $siswa->nis}}</td>
                    @if(is_null($siswa->image))
                        <td>
                            <img src="{{ asset('images/default.png') }}" style="height: 50px" class="img-fluid">
                        </td>
                    @else
                        <td><img class="img-fluid" style="height: 50px"  src="{{asset('images/file/'.$siswa->image)}}"></td>
                    @endif
                    <td>{{ $siswa->nama_siswa}}</td>
                    @if(!is_null($siswa->id_kelas)){
                        <td>{{ $siswa-> kelas-> kode_kelas}} - {{ $siswa->kelas->nama}}</td>
                    }
                    @else{
                        <td> - </td>
                    }
                    @endif
                    <td>{{ $siswa->tmpt_lahir}}</td>
                    <td>{{ $siswa->tgl_lahir}}</td>
                    <td>{{ $siswa->jk_siswa}}</td>
                    <td>{{ $siswa->alamat_siswa}}</td>
                    <td>
                    <a href="{{url('/siswa/hapus/'.$siswa->nis)}}" class="btn btn-sm btn-danger">Hapus</a>
                    <a href="{{url('/siswa/edit/'.$siswa->nis)}}" class="btn btn-sm btn-primary">Edit</a> 
                    <a href="{{url('/siswa/'.$siswa->nis)}}" class="btn btn-sm btn-info">Lihat Profil</a>
                    </td>

                    <?php $nomer++; ?>
                </tr>
                @endforeach
              
                </tbody>
                <tfoot>
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

                    <th>Tindakan</th>
                </tr>
                </tfoot>
        </table>
    </div>
    <div class="card-footer">
        <a href="{{url('/siswa/create')}}" class="btn btn-sm btn-success pull-right">
            <i class="fa fa-plus"></i> Tambah
        </a>
    </div>
</div>
    </div>
@endsection