@extends('admin.template.base')
@section('content')
<div class="container mt-4">
<div class="card bg-light">
    <div class="card-header">
        <h4>Data Guru</h4>
    </div>
    <div class="card-body">
        <table class="table table-striped table-responsive table-bordered data">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Nama Kelas</th>
                </tr>
                </thead>
                <tbody>
                <?php $nomer = 1; ?>

                @foreach ($guru as $row)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $row->nip}}</td>
                    <td>{{ $row->nama}}</td>
                    <td>{{ $row->id_kelas}}</td>
                   
                    <?php $nomer++; ?>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Nama Kelas</th>
                </tr>
                </tfoot>
        </table>
    </div>
    <div class="card-footer">
        <a href="{{url('/walikelas/tambah')}}" class="btn btn-sm btn-success pull-right">
            <i class="fa fa-plus"></i> Tambah
        </a>
        <a href="/walikelas/cetak_pdf" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> CETAK PDF</a>
    </div>
</div>
    </div>
@endsection