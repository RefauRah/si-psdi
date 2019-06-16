@extends('admin.template.base')
@section('contentprofile')
<section class="content-header">
    <?php foreach ($users as $key): ?>
      <h1>Profil Siswa {{$key->nama}}</h1>
      <p>{{$key->alamat}}</p>
    <?php endforeach; ?>
</section>
@endsection