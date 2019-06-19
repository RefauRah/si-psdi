@extends('admin.template.base')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Tabel
            <small>Absensi Siswa Pengajian</small>
        </h3>
    </div>
    <div class="card-body">
        <h4 class="box-title">Absensi Tanggal : <input type="date" class="form-control" name="gender"></h4>
        <h4 class="box-title">Kelas : <input type="text" class="form-control"></h4>
        <h4 class="box-title">Sesi : <select class="form-control">
            <option>K1</option>
            <option>K2</option>
            <option>K3</option>
            <option>K4</option>
            <option>K5</option>
            <option>K6</option>
        </select></h4>
    </div>
</div>
<!-- Tabel -->
<div class="col-lg-12">
    <div class="table-responsive m-b-40">
        <table class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Hadir</th>
                    <th>Sakit</th>
                    <th>Alfa</th>
                    <th>Izin</th>
                    <th class="text-left">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="radio" name="gender" value="male"></td>
                    <td><input type="radio" name="gender" value="male"></td>
                    <td><input type="radio" name="gender" value="male"></td>
                    <td><input type="radio" name="gender" value="male"></td>
                    <td><input type="text" class="form-control" name="gender"></td>
                </tr>
            </tbody>
        </table>
        <input class="btn btn-success pull-right" margin-top="10px" type="submit" value="Submit">
    </div>
</div>
@endsection