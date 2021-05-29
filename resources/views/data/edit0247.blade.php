@extends('layout/main0247')
@section('title','data')

@section('container')

	@foreach($anggota as $anggota)
	<form action="/data0247" method="get">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $anggota->anggota_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $anggota->anggota_nama }}"> <br/>
		alamat <input type="text" required="required" name="alamat" value="{{ $anggota->anggota_alamat }}"> <br/>
		jk <input type="text" required="required" name="telp" value="{{ $anggota->anggota_jk }}"> <br/>
		telp <input type="number" required="required" name="telp" value="{{ $anggota->anggota_telp }}"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

@endsection