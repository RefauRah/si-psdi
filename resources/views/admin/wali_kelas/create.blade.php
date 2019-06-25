@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tambah
        <small>data wali kelas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Wali Kelas</li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
     <!-- Horizontal Form -->
     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Wali Kelas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/walikelas/create">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputGuru" class="col-sm-2">Guru</label>

<!--                   <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputGuru">
                  </div> -->
                  <div class="col-sm-10">
                    <select name="id_guru" id="inputGuru">
                    @foreach ($guru as $row)
                    <option value="{{$row->id}}" required>{{$row->nip}} - {{$row->nama}} </option>
                    @endforeach
                    </select>
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputKelas" class="col-sm-2">Kelas</label>

                  <div class="col-sm-10">
                    <select name="id_kelas" id="inputKelas">
                    @foreach ($kelas as $row)
                    <option value="{{$row->id}}" required>{{$row->kode_kelas}} - {{$row->nama}}</option>
                    @endforeach
                    </select>
                  </div>
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