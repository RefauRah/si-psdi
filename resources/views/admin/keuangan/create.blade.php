@extends('admin.template.base')
@section('content')
<section class="content-header">
      <h1>
        Tambah
        <small>data keuangan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/keuangan')}}">Keuangan</a></li>
        <li class="active">Create</li>
      </ol>
</section>
<section class="content">
    <div class="col-xs-12">
     <!-- Horizontal Form -->
     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form keuangan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/keuangan/create">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputSiswa" class="col-sm-2">Siswa</label>

<!--                   <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputGuru">
                  </div> -->
                  <div class="col-sm-10">
                    <select name="id_siswa" id="inputSiswa">
                    @foreach ($siswa as $row)
                    <option value="{{$row->id_siswa}}">{{$row->nik}} - {{$row->nama}}</option>
                    @endforeach
                    </select>
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputPembayaran" class="col-sm-2">Pembayaran</label>

                  <div class="col-sm-10">
                    <input name="pembayaran" type="text" class="form-control" id="inputPembayaran" placeholder="Jumlah Pembayaran">
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