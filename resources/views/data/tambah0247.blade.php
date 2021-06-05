@extends('layout/main0247')
@section('title','data')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('data0247.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="anggota_nama" class="col-md-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="anggota_nama" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="anggota_nama" value="{{ old('anggota_nama') }}" required autocomplete="anggota_nama" autofocus>

                                @error('nama_lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="anggota_alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>

                            <div class="col-md-6">
                                <input id="anggota_alamat" type="anggota_alamat" class="form-control @error('anggota_alamat') is-invalid @enderror" name="anggota_alamat" value="{{ old('anggota_alamat') }}" required autocomplete="anggota_alamat" autofocus>

                                @error('anggota_alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="anggota_jk" class="col-md-4 col-form-label text-md-right">Jk</label>

                            <div class="col-md-6">
                                <input id="anggota_jk" type="text" class="form-control @error('anggota_jk') is-invalid @enderror" name="anggota_jk" value="{{ old('anggota_jk') }}" required autocomplete="anggota_jk" autofocus>

                                @error('anggota_jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="anggota_telp" class="col-md-4 col-form-label text-md-right">telp</label>

                            <div class="col-md-6">
                                <textarea id="anggota_telp" class="form-control @error('anggota_telp') is-invalid @enderror" name="anggota_telp" value="{{ old('anggota_telp') }}" required autocomplete="anggota_telp" autofocus></textarea>

                                @error('anggota_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection