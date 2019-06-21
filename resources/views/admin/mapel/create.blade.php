@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tambah
        <small>data mata pelajaran</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Mata Pelajaran</li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
     <!-- Horizontal Form -->
     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Mata Pelajaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/mapel/create">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputKode" class="col-sm-2">Kode Mata Pelajaran</label>

                  <div class="col-sm-10">
                    <input name="kode" type="text" class="form-control" id="inputNIK" placeholder="Kode Mata Pelajaran" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-2">Nama Mata Pelajaran</label>

                  <div class="col-sm-10">
                    <input name="nama" type="text" class="form-control" id="inputNama" placeholder="Nama Mata Pelajaran" required>
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

</div>
</section>
@endsection