@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<div class="container mt-4">
<div class="card bg-light">
    <div class="card-header">
        <h4>Data Guru</h4>
    </div>
    <div class="card-body">
    <table class="table table-striped table-bordered data">
			<thead>
				<tr>
                    <th>No</th>
                    <th>NIP</th>			
					<th>Nama</th>
					<th>Alamat</th>
					<th>Tempat Lahir</th>
					<th>Tgl Lahir</th>
					<th>No Tlp</th>
                    <th>Aksi</th>
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
                <td><a href="{{route('showGuru', $row->id)}}" class="btn btn-sm btn-primary">Lihat Profil</a></td>
                <?php $nomer++; ?>
            </tr>
            @endforeach
			</tbody>
		</table>
    </div>
</div>
		
	</div>
@endsection