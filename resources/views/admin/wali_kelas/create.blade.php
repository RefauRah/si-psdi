@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h2 class="col-md-12">Tambah
        <small>data wali kelas</small>
      </h2>
      <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fas fa-tachometer-alt"></i> Home</a></li>
        <li class="">Wali Kelas</li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
<div class="col-md-12 offset-md-0.1">
  <div class="card">
      <div class="card-header">Form Wali Kelas</div>
      <div class="card-body card-block">
          <form action="/walikelas/create" enctype="multipart/form-data" method="post" class="">
            @csrf
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputGuru" class="col-sm-2">Guru</label>

    <!--                   <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputGuru">
                      </div> -->
                      <div class="col-sm-10">
                        <select name="id_guru" id="inputGuru">
                        @foreach ($guru as $row)
                        <option value="{{$row->id}}">{{$row->nip}} - {{$row->nama}}</option>
                        @endforeach
                        </select>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                      <label for="inputKelas" class="col-sm-2">Kelas</label>

                  <div class="col-sm-10">
                    <select name="id_kelas" id="inputKelas">
                    @foreach ($kelas as $row)
                    <option value="{{$row->id}}">{{$row->kode_kelas}} - {{$row->nama}}</option>
                    @endforeach
                    </select>
                  </div>
                  </div>
              </div>
              <div class="form-actions form-group">
                <button type="submit" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
          </form>
      </div>
  </div>
</div>
</section>
@endsection