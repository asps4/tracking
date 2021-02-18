@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Data Kecamatan</div>
                <div class="card-body">
                        <div class="form-group">
                            <label>Kode Kelurahan</label>
                            <input type="text" name="kode_nama" class="form-control" value="{{ $kelurahan->kode_nama }}" readonly>
                            <label>Nama Kecamatan</label>
                            <input type="text" name="nama_provinsi" value="{{ $kelurahan->nama_provinsi }}" class="form-control"  readonly>
                            <label>Nama Kota</label>
                            <input type="text" name='id_kecamatan' class="form-control" value="{{$kelurahan->kecamatan->nama_kecamatan}}" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ url()->previous() }}" class="btn btn-primary btn-block">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
