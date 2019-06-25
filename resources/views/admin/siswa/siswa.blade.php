@extends('admin.template.base')
@section('content')

<div class="container mt-4">
		<table class="table table-striped table-bordered data">
			<thead>
				<tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Image</th>			
					<th>Nama</th>
					<th>Kelas</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
					<th>Aksi</th>
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

@endsection