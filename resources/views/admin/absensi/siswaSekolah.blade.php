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
            <h4>Absensi Sekolah</h4>
        </div>
        <div class="card-body">
            <form class="" method="post" action="">
                @csrf
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="kelas" class=" form-control-label">Tanggal</label>
                    </div>
                    <div class="col col-sm-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" name="tgl_absen" required>
                    </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="kelas" class=" form-control-label">Kelas</label>
                    </div>
                    <div class="col col-sm-3">
                    <div class="input-group" id="tanggal">
                        <div class="input-group-addon">
                            <i class="fa fa-building"></i>
                        </div>
                        <input type="date" class="form-control" name="tgl_absen" required>
                    </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="sesi" class=" form-control-label">Sesi</label>
                    </div>
                    <div class="col col-sm-3">
                        <select class="form-control">
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
                
                <table class="table table-striped table-bordered data">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>			
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center"><input type = "checkbox" name = "" value = ""/></td>
                        
                    </tr>
                    
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
            </form>
        </div>
    </div>
</div>
    

@endsection