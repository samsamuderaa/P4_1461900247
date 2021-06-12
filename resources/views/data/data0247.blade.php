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
      <th scope="col">judul</th>
      <th scope="col">jenis</th>
      <th scope="col">tahun_terbit</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->judul}}</td>
      <td>{{$data->jenis}}</td>
      <td>{{$data->tahun_terbit}}</td>
      
    </tr>
  @endforeach
  </tbody>
  <a href="export_excel" class="btn btn-sm btn-success">export</a>
</table>
</div>
</div>
</div>
@endsection
