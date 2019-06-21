@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h2 class="col-md-12">Tabel
        <small>Kelas</small>
      </h2>
      <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Kelas</li>
      </ol>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3>Data Kelas PSDI</h3>
        </div>
        <div class="card-body">
            <div class="container">         
        <!-- Tabel -->
        <div class="col-lg-12">
            <div class="row form-group">
                <div class="input-group col-md-4 ml-auto">
                    <div class="input-group-btn">
                        <button class="btn btn-secondary">
                            <i class="fa fa-search"></i> Search
                        </button>
                    </div>
                    <input type="text" id="input1-group2" name="input1-group2" placeholder="Cari" class="form-control">
                </div>
            <div class="table-responsive fl-table">
                <table id="example1" class="table table-borderless table-data3 table-wrapper">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Kode</th>
                            <th class="text-center">Nama</th>
                            <!--  <th>Wali Kelas</th>
                            <th>NO Ruangan</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php $nomer = 1; ?>

                    @foreach ($kelas as $row)
                        <tr>
                            <td>{{$nomer}}</td>
                            <td>{{ $row->kode_kelas}}</td>
                            <td class="text-left">{{ $row->nama}}</td>
                            <?php $nomer++; ?>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            <a href="{{url('/kelas/create')}}" class="btn btn-sm btn-success pull-right">
                <i class="fa fa-plus"></i> Tambah
            </a>
            </div>
        </div>
    </div>
</section>
@endsection