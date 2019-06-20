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
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="tanggal" class=" form-control-label">Tanggal</label>
                    </div>
                    <div class="col col-sm-3">
                        <input type="date" id="input-normal" name="input-normal" class="form-control">
                    </div>
                    <div class="input-group col-md-4 ml-auto">
                    <div class="input-group-btn">
                        <button class="btn btn-secondary">
                            <i class="fa fa-search"></i> Search
                        </button>
                    </div>
                    <input type="text" id="input1-group2" name="input1-group2" placeholder="Cari" class="form-control">
                </div>
                </div>
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="kelas" class=" form-control-label">Kelas</label>
                    </div>
                    <div class="col col-sm-3">
                        <input type="text" id="input-normal" name="input-normal" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-sm-1">
                        <label for="sesi" class=" form-control-label">Sesi</label>
                    </div>
                    <div class="col col-sm-3">
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