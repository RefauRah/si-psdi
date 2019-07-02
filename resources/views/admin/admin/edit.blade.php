@extends('admin.template.base')
@section('content')
<section class="content mt-4">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">Form Edit Admin</div>
      <div class="card-body card-block">
          <form action="/admin/update" method="post" class="" enctype="multipart/form-data">
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
                        <option value="admin">Admin</option>
                        <option value="super_admin">Super Admin</option>
                        <option value="pondok">Pondok</option>
                        <option value="Bimbel">Bimbel</option>
                        </select>
                      <div class="input-group-addon">
                          <i class="fa fa-group"></i>
                      </div>
                  </div>
              </div>
              <div class="form-actions form-group">
                <button type="button" onclick="history.back();" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
          </form>
      </div>
  </div>
</div>
</section>
@endsection