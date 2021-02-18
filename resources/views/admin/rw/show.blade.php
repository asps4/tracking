@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Data Kecamatan</div>
                <div class="card-body">
                        <div class="form-group">
                            <label>Kode Rw</label>
                            <input type="text" name="kode_rw" class="form-control" value="{{ $rw->kode_rw }}" readonly>
                            <label>Nama Rw</label>
                            <input type="text" name="nama_rw" class="form-control" value="{{ $rw->nama_rw }}" readonly>
                            <label>Nama Kelurahan</label>
                            <input type="text" name='id_kelurahan' class="form-control" value="{{$rw->kelurahan->nama_provinsi}}" readonly>
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
