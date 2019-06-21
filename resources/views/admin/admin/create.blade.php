@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tambah
        <small>data kelas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Kelas</li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
     <!-- Horizontal Form -->
     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/admin/create">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputNIK" class="col-sm-2">Nama Admin</label>

                  <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" id="inputName" placeholder="Nama Admin" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2">Email Admin</label>

                  <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email Admin" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-sm-2">Password Admin</label>

                  <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password Admin" required>
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