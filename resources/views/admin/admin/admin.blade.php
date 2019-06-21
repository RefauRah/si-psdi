@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h2 class="col-md-12">Tabel
        <small>Admin</small>
      </h2>
      <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa-home"></i> Home</a></li>
        <li class="active">Admin</li>
      </ol>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3>Data Admin PSDI</h3>
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
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th class="text-left">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <a href="{{url('/admin/create')}}" class="btn btn-sm btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection