@extends('admin.template.base')
@section('content')
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
@if(Session::has('flash_message_fail'))
    <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span><em> {!! session('flash_message_fail') !!}</em></div>
@endif

<div class="container py-4">
    <div class="card bg-light">
        <div class="card-header">
            <h4>Absensi Guru</h4>
        </div>
        <div class="card-body">
            <form class="" method="post" action="/absenguru">
                @csrf
                <table class="table table-striped table-bordered data">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>			
                            <th>Nama</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $nomer = 1; ?>
                    <?php $getid = array(); ?>
                    @foreach ($guru as $row)
                    <tr>
                        <td>{{$nomer}}</td>
                        <td>{{ $row->nip}}</td>
                        <td>{{ $row->nama}}</td>
                        <td class="text-center"><input type = "checkbox" name = "id_guru[]" value = "{{$getid[$nomer]}}"/></td>
                        <?php $nomer++; ?>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                <table class="table table-striped table-bordered mt-4">
                    <tr>
                        <th>Hadir</th>
                        <th>Sakit</th>
                        <th>Alfa</th>
                        <th>Izin</th>
                        <th>Keterangan</th>
                    </tr>
                    <tr>
                        <td><input type="radio" name="absen" value="hadir" required></td>
                        <td><input type="radio" name="absen" value="sakit"></td>
                        <td><input type="radio" name="absen" value="alfa"></td>
                        <td><input type="radio" name="absen" value="izin"></td>
                        <td><input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Keterangan"></td>
                    </tr>
                </table>
                    <button type="submit"class="btn btn-primary btn-sm float-right mt-2">Submit</button>
                    <a href="#" class="btn btn-danger btn-sm float-left mt-2">Back</a>
            </form>
        </div>
    </div>
</div>
    

@endsection