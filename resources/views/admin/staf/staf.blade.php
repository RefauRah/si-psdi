@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<div class="container mt-4">
<div class="card bg-light">
    <div class="card-header">
        <h4>Data Staff</h4>
    </div>
    <div class="card-body">
        <table class="table table-striped table-responsive table-bordered data">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>No Tlp</th>
                    <th>Tindakan</th>
                </tr>
                </thead>
                <tbody>

                <?php $nomer = 1; ?>

                @foreach ($staf as $row)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $row->nip_staf}}</td>
                    @if(is_null($row->image))
                        <td>
                            <img src="{{ asset('images/default.png') }}" style="height: 50px" class="img-fluid">
                        </td>
                    @else
                        <td><img class="img-fluid" style="height: 50px"  src="{{asset('images/file/'.$row->image)}}"></td>
                    @endif
                    <td>{{ $row->nama_staf}}</td>
                    <td>{{ $row->alamat_staf}}</td>
                    <td>{{ $row->tempat_lahir_staf}}</td>
                    <td>{{ $row->tgl_lahir_staf}}</td>
                    <td>{{ $row->no_telp_staf}}</td>
                    <td>
                        <a href="{{url('/staf/hapus/'.$row->nip_staf)}}" class="btn btn-sm btn-danger">Hapus</a>
                        <a href="{{route('editStaf', $row->nip_staf)}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{route('showStaf', $row->nip_staf)}}" class="btn btn-sm btn-info">Lihat Profil</a>
                    </td>
                    <?php $nomer++; ?>
                </tr>

                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>No Tlp</th>
                    <th>Tindakan</th>
                </tr>
                </tfoot>
        </table>
    </div>
    <div class="card-footer">
        <a href="{{url('/staf/create')}}" class="btn btn-sm btn-success pull-right">
            <i class="fa fa-plus"></i> Tambah
        </a>
        <!-- <a href="/staf/cetak_pdf" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> CETAK PDF</a> -->
    </div>
</div>
    </div>
@endsection