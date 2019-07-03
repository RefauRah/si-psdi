@extends('admin.template.base')
@section('content')
<div class="container mt-4">
<div class="card bg-light">
    <div class="card-header">
        <h4>Data Admin</h4>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered data">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody>
                <?php $nomer = 1; ?>

                @foreach ($user as $row)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $row->name}}</td>
                    <td>{{ $row->email}}</td>
                    <td>{{$row->user_type}}</td>
                    <?php $nomer++; ?>
                    <td>
                    <a href="{{url('/admin/hapus/'.$row->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Option</th>
                </tr>
                </tfoot>
        </table>
    </div>
    <div class="card-footer">
        <a href="{{url('/admin/create')}}" class="btn btn-sm btn-success pull-right">
            <i class="fa fa-plus"></i> Tambah
        </a>
    </div>
</div>
    </div>
@endsection