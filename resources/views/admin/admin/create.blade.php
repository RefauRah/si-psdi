@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tambah
        <small>data admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Admin</li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
    <div class="card col-md-10 offset-md-1">
        <div class="card-header">
            <h5>Form Admin</h5>
        </div>
        <div class="card-body">
            <div class="container">      
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputNama" class="col-sm-2">Nama :</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputNama" placeholder="Nama">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2">Email :</label>
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputAlamat" class="col-sm-2">Alamat</label>
                    <div class="col-sm-12">
                        <textarea name="alamat" class="form-control" id="inputAlamat" cols="30" rows="4"></textarea>
                    </div>
                </div>
            </form>     
        </div>
        </div>
        <div class="card-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
    </div>
</section>
@endsection