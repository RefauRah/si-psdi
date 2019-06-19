@extends('admin.template.base')
@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3>Tabel
                <small>Absensi Siswa Pengajian</small>
            </h3>
        </div>
        <div class="card-body">
            <div class="container">      
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-2">Absensi Tanggal :</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="alamat">Kelas :</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="alamat">Sesi :</label>
                    <div class="col-sm-2">
                        <select class="form-control">
                            <option>K1</option>
                            <option>K2</option>
                            <option>K3</option>
                            <option>K4</option>
                            <option>K5</option>
                            <option>K6</option>
                        </select>
                    </div>
                </div>      
            </form>     
        </div>
        <!-- Tabel -->
        <div class="col-lg-12">
            <div class="table-responsive fl-table">
                <table class="table table-borderless table-data3 table-wrapper">
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
                            <td>69</td>
                            <td>1123</td>
                            <td>Cecep Melon</td>
                            <td><input type="radio" name="" value="male"></td>
                            <td><input type="radio" name="" value="male"></td>
                            <td><input type="radio" name="" value="male"></td>
                            <td><input type="radio" name="" value="male"></td>
                            <td><input type="text" class="form-control" name=""></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <input class="btn btn-success pull-right" type="submit" value="Submit">
            </div>
        </div>
    </div>
</section>
@endsection