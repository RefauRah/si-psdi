@extends('admin.template.base')
@section('content')
<div class="container mt-4">
<div class="card bg-light">
    <div class="card-header">
        <h4>Data Kelas</h4>
    </div>
    <div class="card-body">
        <table class="table table-striped table-responsive table-bordered data">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelas</th>
                    <th>Tindakan</th>
                   <!--  <th>Wali Kelas</th>
                    <th>NO Ruangan</th> -->
                </tr>
                </thead>
                <tbody>
                <?php $nomer = 1; ?>

                @foreach ($kelas as $row)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $row->kode_kelas}}</td>
                    <td>{{ $row->nama}}</td>
                    @if($row->jenis_kelas == 'Pengajian')
                        <td>{{$row->jenis_kelas}} - {{$row->prapasca}}</td>
                    @else
                        <td>{{$row->jenis_kelas}}</td>
                    @endif
                    <td>
                        <a href="{{route('showKelas', $row->id)}}" class="btn btn-sm btn-primary">Daftar Siswa</a>
                        <a href="{{route('showAnggota', $row->id)}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Anggota Kelas</a>
                    </td>
                    <?php $nomer++; ?>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelas</th>
                    <th>Tindakan</th>
                   <!--  <th>Nama</th>
                    <th>Wali Kelas</th>
                    <th>NO Ruangan</th> -->
                </tr>
                </tfoot>
        </table>
    </div>
    <div class="card-footer">
        <a href="{{url('/kelas/create')}}" class="btn btn-sm btn-success pull-right">
            <i class="fa fa-plus"></i> Tambah
        </a>
        <a href="/kelas/cetak_pdf" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> CETAK PDF</a>
    </div>
</div>
    </div>
@endsection