@extends('admin.template.base')
@section('content')

<div class="container mt-4">
		<table class="table table-striped table-bordered data">
			<thead>
				<tr>
                    <th>No</th>
                    <th>Kode</th>			
					<th>Nama</th>
					<th>Jenis</th>
					
				</tr>
			</thead>
			<tbody>
            <?php $nomer = 1; ?>

            @foreach ($kelas as $row)
                <tr>
                    <td>{{$nomer}}</td>
                    <td>{{ $row->kode_kelas}}</td>
                    <td class="text-left">{{ $row->nama}}</td>
                    <td></td>
                    <?php $nomer++; ?>
                </tr>
            @endforeach
			</tbody>
		</table>
	</div>

@endsection