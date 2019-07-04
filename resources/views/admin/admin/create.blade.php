@extends('admin.template.base')
@section('content')
<<<<<<< HEAD
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">Form Admin</div>
      <div class="card-body card-block">
          <form action="/admin/create" method="post" class="">
          @csrf
              <div class="form-group">
                  <div class="input-group">
                    <label for="inputNIK" class="col-sm-2">Nama Admin</label>
                      <input name="name" type="text" class="form-control" id="inputName" placeholder="Nama Admin" required>
                      <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputEmail" class="col-sm-2">Email Admin</label>
                      <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email Admin" required>
                      <div class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputPassword" class="col-sm-2">Password</label>
                      <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password Admin" required autocomplete="new-password">
                      <div class="input-group-addon">
                          <i class="fa fa-key"></i>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="user_type" class="col-sm-2">Peran User</label>
                        <select class="form-control" name="user_type" id="user_type">
                        <option value=""></option>
                        <option value="super_admin">Super Admin</option>
                        <option value="admin">Admin</option>
                        <option value="smarter">Smarter</option>
                        <option value="bimbel">Bimbel</option>
                        <option value="pesantren">Pesantren</option>
                        <option value="pasca_mubaligh">Pasca Mubaligh</option>
                        <option value="pra_mubaligh">Pra Mubaligh</option>
                        </select>
                      <div class="input-group-addon">
                          <i class="fa fa-group"></i>
                      </div>
                  </div>
              </div>
              <div class="form-actions form-group">
                  <button type="button" onclick="history.back();" class="btn btn-danger">Back</button>
=======
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
                  <label for="inputPassword" class="col-sm-2">Password</label>

                  <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password Admin" required autocomplete="new-password">
                  </div>
                </div>

                <div class="form-group">
                        <label for="user_type" class="col-sm-2">Peran User</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="user_type" id="user_type">
                        <option value=""></option>
                        <option value="super_admin">Super Admin</option>
                        <option value="admin">Admin</option>
                        <option value="smarter">Smarter</option>
                        <option value="bimbel">Bimbel</option>
                        <option value="pesantren">Pesantren</option>
                        <option value="pasca_mubaligh">Pasca Mubaligh</option>
                        <option value="pra_mubaligh">Pra Mubaligh</option>
                        </select>
                        </div>
                        </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" onclick="history.back();" class="btn btn-danger">Back</button>
>>>>>>> 7ec241c3f60e0fcd5ed3ef82008c3f0c5ea0e60f
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
          </form>
      </div>
  </div>
</div>
</section>
@endsection