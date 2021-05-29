@extends('layout/main0247')
@section('title','data')

@section('container')
</nav>
<div class="container">
<div class="row">
<div class="col-10">
    <h1 class="mt-3">Daftar Data</h1>
    <table class="table table-dark table-striped">
  <thead class="thed-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">nama</th>
      <th scope="col">alamat</th>
      <th scope="col">jk</th>
      <th scope="col">tlfn</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($anggota as $anggota)
    <tr>
      <th scope="row">{{$anggota->anggota_id}}</th>
      <td>{{$anggota->anggota_nama}}</td>
      <td>{{$anggota->anggota_alamat}}</td>
      <td>{{$anggota->anggota_jk}}</td>
      <td>{{$anggota->anggota_telp}}</td>
      <td>
      <a href="" class="badge badge-success ">edit</a>
      <a href="" class="badge badge-danger">delete</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
</div>
</div>
@endsection
