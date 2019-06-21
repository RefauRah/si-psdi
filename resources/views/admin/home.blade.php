@extends('admin.template.base')
@section('content')
<section class="content">
    <div class="col-lg-12" style="padding-top:50px">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header text-center">Guru</div>
                    <div class="card-body text-center">
                        <a href="{{url('/guru')}}">
                            <div class="box box-default">
                                <div class="box-body text-center">
                                <i class="fa fa-users" style="font-size:100px"></i>
                                </div>
                                <div class="box-footer text-center">
                                    <p style="font-size:20px">Data Guru PSDI</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header text-center">Mata Pelajaran</div>
                    <div class="card-body text-center">
                        <a href="{{url('/mapel')}}">
                            <div class="box box-default">
                                <div class="box-body text-center">
                                <i class="fa fa-book" style="font-size:100px"></i>
                                </div>
                                <div class="box-footer text-center">
                                    <p style="font-size:20px">Data Mapel PSDI</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header text-center">Siswa</div>
                    <div class="card-body text-center">
                        <a href="{{url('/siswa')}}">
                            <div class="box box-default">
                                <div class="box-body text-center">
                                <i class="fa fa-users" style="font-size:100px"></i>
                                </div>
                                <div class="box-footer text-center">
                                    <p style="font-size:20px">Data Siswa PSDI</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection